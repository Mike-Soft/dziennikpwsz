<?php

namespace App\Http\Controllers;

use App\Clas;
use App\Grade;
use App\SubjectUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function new(Request $request, Grade $grade)
    {
//        $this->validate($request, [
//
//            'mark' => 'required',
//
//
//
//        ]);

//        if($request->class)
//        {
//            $classname = (Clas::where('id', $request->class)->get(['name'])->first())->name;
//
//        }
//        else{
//            $classname = "";
//        };
        Grade::create([

//        $grade->subject_id = $request['subjectid'];
//        $grade->user_id = $request['userid'];
//        $grade->mark = $request['note'];

            'user_id'=>$request->user,
            'subject_id'=>$request->subject,
            'mark'=> $request->note,

//            $this->store()


        ]);

        $class=$request->class;

       return redirect(route('grades.view', ['class'=>$class, 'subject'=>$request->subname ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit($user, $subject, $username, $subjectname)
    {
        $marks = DB::table('subject_user')->where(['subject_id', $subject],['user_id', $user])->get();

        return view('teacher.editgrade')->with('marks', $marks)->with('username', $username)->with('subjectname', $subjectname)
            ->with('user', $user)->with('subject', $subject);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user, $subject, $mark, SubjectUser $subjectuser)
    {
//        if($request['mark'])
//        {
//            $markid = SubjectUser::where('id', $request->mark)->get();
//            $mark->id = $markid->id;
//        }
//        else{
//            $subjectuser->delete();
//        }s
//
//        $mark->mark= $request['mark'];
//
//        return redirect(route('grades.view', ['class'=>$user->class, 'subject'=>$subject ]));
//
//
//
//
//
//
//
//
//        $user->save();

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
