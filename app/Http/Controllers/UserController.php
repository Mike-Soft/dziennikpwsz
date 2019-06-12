<?php

namespace App\Http\Controllers;

use App\User;
use App\Clas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
        $users = DB::table('users')->orderBy('surname')->get();

        return view('admin.index', ['users' => $users]);


//        $users = User::all();
//        return view('admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Clas $class)
    {


    return view('admin.adduser')->with('classes', $class);

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

        if($request->class)
        {
            $classname = (Clas::where('id', $request->class)->get(['name'])->first())->name;

                    }
        else{
            $classname = "";
                    };



        User::create([



           'name'=>$request->name,
            'surname'=>$request->surname,
            'role'=>$request->get('role'),
            'class'=>$classname,
            'email'=>$request->email,
            'parentmail'=>$request->parentmail,
            'password'=>Hash::make($request['password']),
            'clas_id'=>$request->class



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
        if($request['class'])
        {
            $classname = Clas::where('id', $request->class)->get(['name'])->first();
            $user->class = $classname->name;
        }
        else{
            $user->class="";
        }

        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->role = $request['role'];

        $user->email = $request['email'];
        $user->parentmail = $request['parentmail'];


        if ($request['password']){
        $user->password = Hash::make($request['password']);
        }

        $user->clas_id = $request['class'];

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
        $user->delete();

        return redirect(route('users.index'));
    }
}
