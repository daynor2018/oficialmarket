<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index(Request $request)
    {
        if ($request->user()->authorizeRoles('admin','user','employee','cashier')) {
            if ($request->user()->hasRole('admin')) {
                return view('homeadmin');    
            }else{
                if ($request->user()->hasRole('cashier')) {
                    return view('homecashier');
                }else{
                    if ($request->user()->hasRole('employee')) {
                        return view('homeemployee');
                    }else{
                        if ($request->user()->hasRole('user')){
                            return view('homeuser');
                        }else{
                        return view('error');
                        }
                    }
                }
            }
        }
    }
}
