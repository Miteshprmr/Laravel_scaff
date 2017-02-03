<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('admin');
    }

     /**
     * Display a dashboard of admin
     *
     * @return \Illuminate\Http\Response
     */
    public function getDashboard() {
        $admin = Auth::guard('admin')->user();
    	return view('admin.dashboard')->withAdmin($admin);
    }
}
