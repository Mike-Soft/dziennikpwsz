<?php

namespace App\Http\Controllers;

use App\Clas;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = DB::table('classes')->get();

        return view('teacher.index',['classes' => $class]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function show(Clas $class, Subject $subject)
    {


        return view('teacher.subjects')->with('subjects', Subject::all() )->with('class', $class);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function edit(Clas $clas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clas $clas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clas $clas)
    {
        //
    }
}
