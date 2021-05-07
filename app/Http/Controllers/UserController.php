<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function showlist()
    {
        $users = User::all();
        return view('listuser',['users'=>$users]);
    }

    public function showtasktodo($id)
    {
    	$tasktodo = DB::table('taskdetail')
            ->join('task', 'taskdetail.task_id', '=', 'task.id')
            ->join('users', 'taskdetail.user_id', '=', 'users.id')
            ->select('task.todo as listtodo')
            ->where('users.id','=',$id)
            ->get();
        return view('userdetail',['tasktodo'=>$tasktodo]);
    }

}
