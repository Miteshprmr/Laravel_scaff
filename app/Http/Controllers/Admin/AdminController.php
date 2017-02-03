<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('admin');
        $admin = Auth::guard('admin')->user();
        View::share('admin', $admin);
    }

    /**
     * Display a dashboard of admin
     *
     * @return \Illuminate\Http\Response
     */
    public function getDashboard() {
    	return view('admin.dashboard');
    }

    /**
     * Display a list of users
     *
     * @return \Illuminate\Http\Response
     */
    public function getUsersList() {
        $users = User::all();
        return view('admin.users')->withUsers($users);
    }

    /**
     * Display a edit form of user
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function getUserEditForm($id) {
        $user = User::find($id);
        return view('admin.users.edit')->withUser($user);
    }


    /**
     * Delete user
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUser($id) {
        $users = User::destroy($id);
        return redirect()->route('admin.users');
    }
}
