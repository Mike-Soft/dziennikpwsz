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
        if($request->note) {

            Grade::create([

//        $grade->subject_id = $request['subjectid'];
//        $grade->user_id = $request['userid'];
//        $grade->mark = $request['note'];


                'user_id' => $request->user,
                'subject_id' => $request->subject,
                'mark' => $request->note,

//            $this->store()


            ]);

            $class = $request->class;


            return redirect(route('grades.view', ['class' => $class, 'subject' => $request->subname]));

        }

        else{
            $class = $request->class;
            return redirect(route('grades.view', ['class' => $class, 'subject' => $request->subname]));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show($grade)
    {
        $marks = DB::table('subject_user')->where(['user_id'=>$grade])->get();
        $subjects = DB::table('subjects')->get();
        $user = DB::table('users')->where('id', $grade)->first();


        return view('student.overview')->with('studentid', $grade)->with('marks', $marks)->with('subjects', $subjects)->with('user', $user);
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
    public function update(Request $request,  SubjectUser $subjectuser)
    {




        if($request['noteedit'])
        {
            $subjectuser = SubjectUser::where('id', $request['grade'])->first();
//            $subjectuser->id = $gradename->id;


            $subjectuser->mark=$request['noteedit'];
            $subjectuser->subject_id=$request['subject'];
            $subjectuser->user_id=$request['user'];
            $subjectuser->save();
        }
        else{
            $subjectuser = SubjectUser::where('id', $request['grade'])->first();
//            $subjectuser->id = $gradename->id;

            if($subjectuser!=null) {
                $subjectuser->delete();
            }
        }


        $users = DB::table('users')->orderBy('surname')->where('class', $request['class'])->get();
        $sub = DB::table('subjects')->where('name', $request['subname'])->first();
        $subs = DB::table('subjects')->where('name', $request['subname'])->first();
        $marks = DB::table('subject_user')->where('subject_id', $request['subject'])->get();
        $class=$request['class'];
//        $allusers = DB::table('users')->orderBy('surname')->get();

        return view('teacher.clas')->with ('users', $users)->with('sub', $sub)->with('marks', $marks)->with('class', $class);

//        return redirect(route('grades.view', ['class'=>$requuser->class, 'subject'=>$subject ]));










//        return redirect(route('users.index'));
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
