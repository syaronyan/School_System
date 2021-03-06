<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Students;
use App\Group;
use App\Tasks;
use App\Progress;

class StundentController extends Controller
{
    //サインイン画面へ遷移
    public function index()
    {
        return view('signin');
    }

    //ログインしていたらTOP画面へ遷移
    public function Top(Request $request)
    {
        $user = $request->session()->get('user');
        if (!empty($user)){
            // $groups = Group::select('id', 'name', 'tools', 'img_link')
            // ->where('status', '=', 1)
            // ->get();
            //生徒の情報を取得
            $student = Students::select('id', 'name', 'email','course', 'created_at')
            ->where('id', '=', $user)
            ->first();
            // return view('Top', compact('groups', 'student'));
            if($student->course == 0){
                $groups = Group::select('id', 'name', 'tools', 'img_link')
                ->where('status', '=', 1)
                ->get();
                return view('Top', compact('groups', 'student'));
            }elseif($student->course == 1){
                $groups = Group::select('id', 'name', 'tools', 'img_link')
                ->where('status', '=', 2)
                ->get();
                return view('data-science-work', compact('groups', 'student'));
            }elseif($student->course == 2){
                $groups = Group::select('id', 'name', 'tools', 'img_link')
                ->whereNotIn('id', [5, 6, 14, 15, 16, 17, 19])
                ->get();
                return view('PRO_science_work', compact('groups', 'student'));
            }
        }else{
            return $this->index();
        }
        
    }
    
    //ログインしていたらmypage画面へ遷移
    public function mypage(Request $request)
    {
        //セッションの取得
        $user = $request->session()->get('user');


        if (!empty($user)){
            $group_ids = [];
            $group_names = [];
            $group_imgs = [];
            $parcents = [];
            $progress_tasks_edit = [];
            $student_id = $request->student_id;
            
            //サブクエリ
            $sub = Progress::select('tasks_id', 'check_flag')
            ->where('student_id', '=', ':student_id')
            ->where('check_flag', '=', ':check_flag')
            ->toSql();

            //進捗管理のデータ取得
            $progress_tasks = Tasks::select(DB::raw('group_id, group.img_link as group_img, group.name as group_name, count(*) as tasks_count, count(progress.check_flag) as progress_count'))
            ->join('group', 'group.id', '=', 'tasks.group_id')
            ->leftJoin(DB::raw('('.$sub.') AS progress'), 'progress.tasks_id', '=', 'tasks.id')
            ->groupBy('tasks.group_id')
            ->setBindings([':student_id'=>$user, ':check_flag'=>'1'])
            ->get();

            //上記データを編集
            foreach ($progress_tasks as $progress_task){
                array_push($group_ids, $progress_task['group_id']);
                array_push($group_names, $progress_task['group_name']);
                array_push($group_imgs, $progress_task['group_img']);
                $parsent = round(($progress_task['progress_count']/$progress_task['tasks_count'])*100);
                array_push($parcents, $parsent);

                $progress_tasks_edit['group_ids'] = $group_ids;
                $progress_tasks_edit['group_names'] = $group_names;
                $progress_tasks_edit['group_imgs'] = $group_imgs;
                $progress_tasks_edit['parcents'] = $parcents;
            }

            //生徒の情報を取得
            $student = Students::select('id', 'name', 'email','course', 'created_at')
            ->where('id', '=', $user)
            ->first();

            // $groups = Group::select('id', 'name', 'tools', 'img_link')
            // ->get();
            // print_r($progress_tasks_edit);
            // exit;

            //進捗管理と生徒の情報を持ってmypageに遷移
            // return view('mypage', compact('progress_tasks_edit', 'student'));
            if($student->course == 0){
                return view('mypage', compact('progress_tasks_edit', 'student'));
            }elseif($student->course == 1){
                return view('data-science', compact('progress_tasks_edit', 'student'));
            }elseif($student->course == 2){
                return view('PRO_science', compact('progress_tasks_edit', 'student'));
            }
        }else{
            return $this->index();
        }
    }

    public function option(Request $request)
    {
        $user = $request->session()->get('user');
        if (!empty($user)){
            $groups = Group::select('id', 'name', 'tools', 'img_link')
            ->get();
            //生徒の情報を取得
            $student = Students::select('id', 'name', 'email','course', 'created_at')
            ->where('id', '=', $user)
            ->first();
            return view('option', compact('student'));
        }else{
            return $this->index();
        }
        
    }

    public function document(Request $request)
    {
        $user = $request->session()->get('user');
        if (!empty($user)){
            //生徒の情報を取得
            $student = Students::select('id', 'name', 'email','course', 'created_at')
            ->where('id', '=', $user)
            ->first();
            if($student->course == 0){
            return view('document', compact('student'));
            }else{
                return $this->index();
            }
        }else{
            return $this->index();
        }
        
    }

    public function signup(Request $request)
    {
        $user = $request->session()->get('user');
        if ($user == 1 || $user == 2 || $user == 3 || $user == 73 || $user == 87){
            return view('signup');
        }else{
            return $this->index();
        }
    }

    //ログインしていたらwork画面へ遷移
    // public function work(Request $request)
    // {
    //     $user = $request->session()->get('user');
    //     if (!empty($user)){
    //         //生徒の情報を取得
    //         $student = Students::select('id', 'name', 'email', 'created_at')
    //         ->where('id', '=', $user)
    //         ->first();
    //         return view('work', compact('student'));
    //     }else{
    //         return $this->index();
    //     }
    // }
}
