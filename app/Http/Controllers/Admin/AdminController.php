<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
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
        return view('admin.users.list')->withUsers($users);
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
     * Update user detail
     *
     * @param  array  $data, id
     * @return \Illuminate\Http\Response
     */
    public function postUserEdit(Request $request, $id) {

        // validate the data
        $this->validate($request, array(
            'name'         => 'required|max:255',
            'email'        => "required|email|unique:users,email,$id",
            'state'        => 'required|max:255',
            'phone_number' => 'required'
        ));

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->phone_number = $request->phone_number;
        $user->occupation = $request->occupation;
        if(isset($request->is_sub)) {
            $user->is_subscriber = 1;
        } else {
            $user->is_subscriber = 0;
        }
        $user->save();

        Session::flash('success', 'The User was successfully save!');
        return redirect()->route('admin.users');
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
