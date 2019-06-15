<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $users = DB::table('users')->where('surname', 'LIKE', '%' . $request->search . "%")->get();

            if ($users) {
                foreach ($users as $key => $user) {


                    $output .=
                        '<tr>' .

                        '<td>' . $user->surname . '</td>' .
                        '<td>' . $user->name . '</td>' .
                        '<td>' . $user->class . '</td>' .
                        '<td>' . $user->parentmail . '</td>' .
                        '</tr>';


                }

                return Response($output);
            }
        }
    }
}