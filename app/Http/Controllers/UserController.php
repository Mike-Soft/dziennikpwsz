<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    return view('admin.adduser');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',

            'email' => 'required|unique:users',

            'password' => 'required'


        ]);
        User::create([

           'name'=>$request->name,
            'surname'=>$request->surname,
            'role'=>$request->get('role'),
            'class'=>$request->get('class'),
            'email'=>$request->email,
            'parentmail'=>$request->parentmail,
            'password'=>Hash::make($request['password'])



        ]);

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return redirect('users/{{ $user->id }}/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {

    return view('admin.edituser')->with('user', $user);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {


        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->role = $request['role'];
        if ($request['class']) {
            $user->class = $request['class'];
        }


        $user->email = $request['email'];
        if ($request['parentmail']) {
            $user->parentmail = $request['parentmail'];
        }

        if ($request['password']){
        $user->password = Hash::make($request['password']);
        }

        $user->save();

    return redirect(route('users.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
