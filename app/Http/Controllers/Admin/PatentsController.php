<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Patent;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPatentUpdate as AdminPatentUpdateRequest;

class PatentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patents = Patent::orderBy('filing_date')->paginate();

        return view('pages.admin.patents.index', compact('patents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.patents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPatentUpdateRequest $request)
    {
        $patent = new Patent;
        return $this->update($request, $patent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patent $patent)
    {
        return view('pages.admin.patents.edit', compact('patent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPatentUpdateRequest $request, Patent $patent)
    {
        $patent->fill($request->only([
            'product',
            'jurisdiction',
            'application_number',
            'description',
            'filing_date',
            'status',
        ]));
        $patent->save();

        return redirect(route('admin.patents'))->with([ 'message' => sprintf('%s successfully updated', $patent->product) ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patent $patent)
    {
        $patent->delete();

        return redirect(route('admin.patents'))->with([ 'message' => sprintf('%s successfully deleted', $patent->product) ]);
    }
}
