<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Lib\MsgContent;
use App\Notifications\Msg;

class Msg_web extends Controller
{
    //
	
	public function send(Request $request){
		
		if($request->isMethod('post')){
			$user=User::where('role','admin')->get();
			$msg=new MsgContent($request->input('name'),$request->input('phone'),$request->input('email'),$request->input('message'));
								Notification::send($user,new Msg($msg));
								return redirect()->back();
		}
		else {
			return view('web.contact');
			
		}
		
	}
		public function index(){

	$user=Auth::user();
			$arr['msgs']=$user->Notifications;
						return view('admin.msg.index',$arr);

	
	
}
		public function show($id){

	$user=Auth::user();
			$msg=$user->Notifications()->find($id);
			$msg->markAsRead();
			$arr['msg']=$msg;
						return view('admin.msg.show',$arr);

	
	
}	
		public function delete($id){

	$user=Auth::user();
			$msg=$user->Notifications()->find($id);
			$msg->delete();
						return redirect()->back();

	
	
}	
	
	
	
	
	
	
}