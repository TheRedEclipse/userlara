<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
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
     * Show userlist
     */
    public function index()
    {
        $users = User::all();

        return view('index', compact('users'));
    }

    /**
     * @parsam $id
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $method = $request->method();

        $user = User::find($id);

        if($request->isMethod('get')) {

            return view('update', compact('user'));

        }

        if ($request->isMethod('post')) {

            $user->email = $request->input('email');

            $user->name = $request->input('name');

            $user->password = $request->input('password');

            $user->save();

            return Redirect::route('index');
        }

    }

    /**
     * Delete user by ID
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

        if(User::find($id)) {

           User::destroy($id);

           return Redirect::route('index');

        }

    }

    public function create(Request $request)
    {
        $method = $request->method();

        if($request->isMethod('get')) {

            return view('create');

        }

        if ($request->isMethod('post')) {

            $user = new User();

            $user->email = $request->input('email');

            $user->name = $request->input('name');

            $user->password = $request->input('password');

            $user->save();

            return Redirect::route('index');
        }


    }


}
