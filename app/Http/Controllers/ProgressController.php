<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Group;
use App\Tasks;
use App\Progress;

class ProgressController extends Controller
{
    public function index (Request $request) 
    {
        return view('signin');
    }

    public function pro (Request $request) 
    {
        // $user = $request->session()->get('user');
        // $user = Session::get('user');
        // if (!empty($user)){
            $student_id = $request->student_id;
            // $student_id = $user;
            $tasks_id = $request->tasks_id;
            $check_flag = $request->check_flag;
            
            if ($check_flag == 1){
                $exist = Progress::where('student_id', '=', $student_id)
                ->where('tasks_id', '=', $tasks_id)->exists();
                
                if($exist){
                    Progress::where('student_id', '=', $student_id)
                    ->where('tasks_id', '=', $tasks_id)
                    ->update([
                        'student_id' => $student_id,
                        'tasks_id' => $tasks_id,
                        'check_flag' => 1
                        ]);
                }else{
                    Progress::create($request->all()); 
                }
            }
            elseif ($check_flag == 0) {
                Progress::where('student_id', '=', $student_id)
                ->where('tasks_id', '=', $tasks_id)
                ->update([
                    'student_id' => $student_id,
                    'tasks_id' => $tasks_id,
                    'check_flag' => 0
                ]);
            }
        // }else{
        // return $this->index();
        // }
    
    }
}
