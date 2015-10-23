<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * Current user
     *
     * @var
     */
    protected $user;

    /**
     * Check for user login
     * @var
     */
    protected $userHasLogin;

    /**
     * Constructor for the Controller
     */
    public function __construct()
    {
        $this->user = $this->userHasLogin = Auth::user();
    }
}
