<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Clas;
use App\Subject;
use App\SubjectUser;

class SubjectController extends Controller
{
    public function index( $class, $subject)
    {
        $users = DB::table('users')->orderBy('surname')->where('class', $class)->get();
        $sub = DB::table('subjects')->where('name', $subject)->first();
        $subs = DB::table('subjects')->where('name', $subject)->first();
            if($sub)

            {
                $markss=$sub->id;
        $marks = DB::table('subject_user')->where('subject_id', $sub->id)->get();

            }
            else{
                $markss=0;
                $marks=0;

            }
//        $allusers = DB::table('users')->orderBy('surname')->get();

        return view('teacher.clas')->with ('users', $users)->with('sub', $sub)->with('marks', $marks)->with('class', $class)->with('subid', $markss);
    }
}
