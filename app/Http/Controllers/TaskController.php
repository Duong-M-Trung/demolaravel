<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class TaskController extends Controller
{
	public function showlist(){
		if (!Auth::check()) {
			return view('login');
		}
		else{
			$user=Auth::user();
		}
		$list = DB::table('task')->get();
		return view('demo',['list' => $list,'user' => $user]);
	}
	public function getformtask(){
		$users = User::all();
		return view('addlist',['users'=>$users]);
	}
    public function addlist(Request $request){
    	$todo = $request->todo;
    	$finish = $request->finishday;
    	DB::table('task')->insert(
		    ['todo' => $todo, 'finishday' => $finish]
		);
		return redirect('/demo');
    }
    public function gettoconfig($id){
    	$users = User::all();
    	$taskdetail = DB::table('taskdetail')
            ->join('task', 'taskdetail.task_id', '=', 'task.id')
            ->join('users', 'taskdetail.user_id', '=', 'users.id')
            ->select('users.name as username','task.todo')
            ->where('task.id','=',$id)
            ->get();
		$task = DB::table('task')
              ->where('id', $id)
              ->get();
		return view('configtask',['taskdetail' => $taskdetail,'task' => $task,'users' => $users,'id' => $id]);
	}
	public function configtask(Request $request){
		$user = $request->user;
    	$todo = $request->todo;
    	$finish = $request->finishday;
    	$id = $request->id;
		DB::table('task')
              ->where('id', $id)
              ->update(['todo' => $todo, 'finishday' => $finish]);
		return redirect('/demo');
	}
	public function deletetask($id){
		DB::table('task')->where('id', '=', $id)->delete();
		return redirect('/demo');
	}
	public function addusertotask(Request $request){
		$taskid = $request->idtask;
		$user = $request->user;
		DB::table('taskdetail')->insert(
		    ['task_id' => $taskid, 'user_id' => $user]
		);
		return redirect('/demo/task/'.$taskid);
	}
}
