<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Group;
use App\Tasks;
use App\Progress;

class StundentController extends Controller
{
    public function index()
    {
        return view('signin');
    }

    public function Top()
    {
        return view('Top');
    }

    public function mypage(Request $request)
    {
        $user = $request->session()->get('user');
        $group_ids = [];
        $group_names = [];
        $parcents = [];
        $progress_tasks_edit = [];
        $student_id = $request->student_id;

        $sub = Progress::select('tasks_id', 'check_flag')
        ->where('student_id', '=', ':student_id')
        ->where('check_flag', '=', ':check_flag')
        ->toSql();

        $progress_tasks = Tasks::select(DB::raw('group_id, group.name as group_name, count(*) as tasks_count, count(progress.check_flag) as progress_count'))
        ->join('Group', 'group.id', '=', 'tasks.group_id')
        ->leftJoin(DB::raw('('.$sub.') AS progress'), 'progress.tasks_id', '=', 'tasks.id')
        ->groupBy('tasks.group_id')
        ->setBindings([':student_id'=>$user, ':check_flag'=>'1'])
        ->get();

        foreach ($progress_tasks as $progress_task){
            array_push($group_ids, $progress_task['group_id']);
            array_push($group_names, $progress_task['group_name']);
            $parsent = ($progress_task['progress_count']/$progress_task['tasks_count'])*100;
            array_push($parcents, $parsent);

            $progress_tasks_edit['group_ids'] = $group_ids;
            $progress_tasks_edit['group_names'] = $group_names;
            $progress_tasks_edit['parcents'] = $parcents;
        }

        // var_dump($progress_tasks_edit);
        // exit;

        return view('mypage', compact('progress_tasks_edit'));
    }

    public function signup()
    {
        return view('signup');
    }

    public function work()
    {
        return view('work');
    }
}
