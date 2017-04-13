<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medlab\Repositories\AccountRepositoryInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class NutraceuticalsPricingController extends Controller
{
    /**
     * Repository for the Controller
     *
     * @var AccountRepositoryInterface
     */
    protected $repository;

    /**
     * Constructor fore the AccountController
     *
     * @param AccountRepositoryInterface $repository
     */
    public function __construct(AccountRepositoryInterface $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
        parent::__construct();
    }

    public function store(Request $request, $product = null)
    {
        $user = $this->user;

        if ($product) {
            $this->user->practitioner_pricing()->detach($product);
            $this->user->practitioner_pricing()->attach($product, ['price_discounted' => $request->get('pricing_discounted')]);
        } elseif ($request->has('pricing_markup_percent')) {
            Product::with(['practitioner_pricing' => function($query) use ($user) {
                    return $query->where('user_id', $user->id);
                }])->get()->each(function ($product) use ($request)
            {
                if ($product->practitioner_pricing->count() == 0) {
                    $this->user->practitioner_pricing()->attach($product, [
                        'price_discounted' => $product->price_wholesale * (1 + ($request->get('pricing_markup_percent', 0) / 100))
                    ]);
                }
            });
        }

        return redirect()->route('account.pricing.index')->with(['message' => 'Patient pricing successfully saved']);
    }

    public function destroy($product)
    {
        $this->user->practitioner_pricing()->detach($product);

        return redirect()->back();
    }

    public function pageIndex()
    {
        $user = $this->user->load('practitioner_pricing');
        $products = Product::all();
        $products = $products->merge($user->practitioner_pricing);

        $orders = $this->repository->getLatestOrdersForUser($user);

        return view('pages.account.dashboard.pricing.overview.index', compact('user', 'orders', 'products'));
    }

    public function pageEdit($product)
    {
        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);
        $product = Product::with(['practitioner_pricing' => function($query) {
            return $query->where('user_id', $this->user->id);
        }])->findOrFail($product);

        return view('pages.account.dashboard.pricing.edit.index', compact('user', 'orders', 'product'));
    }
}
