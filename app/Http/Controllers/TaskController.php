<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    public function addlist(Request $request){
    	$user = $request->user;
    	$todo = $request->todo;
    	$finish = $request->finishday;
    	DB::table('task')->insert(
		    ['user' => $user, 'todo' => $todo, 'finishday' => $finish]
		);
		return redirect('/demo');
    }
    public function gettoconfig($id){
		$task = DB::table('task')
              ->where('id', $id)
              ->get();
		return view('configtask',['task' => $task]);
	}
	public function configtask(Request $request){
		$user = $request->user;
    	$todo = $request->todo;
    	$finish = $request->finishday;
    	$id = $request->id;
		DB::table('task')
              ->where('id', $id)
              ->update(['user' => $user, 'todo' => $todo, 'finishday' => $finish]);
		return redirect('/demo');
	}
	public function deletetask($id){
		DB::table('task')->where('id', '=', $id)->delete();
		return redirect('/demo');
	}
}
