<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function withTriager()
    {
        return view('with-triager');
    }

	public function accepted()
    {
        return view('accepted');
    }

	public function rejected()
    {
        return view('rejected');
    }

	public function dashboard()
    {
        return view('dashboard');
    }
}
