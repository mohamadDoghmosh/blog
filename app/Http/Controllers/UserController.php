<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    //
	
	public function index() {
		$user=User::all();
		$arr['user']=$user;
					return view('admin.user.index',$arr);

		
	}
	public function store(Request $request) {
		if($request->isMethod('post')){
			$input=$request->only('name','phone','email');
			$input['role']='user';
			$input['password']=Hash::make($request->input('password'));
			$user=User::Create($input); 
			return redirect()->back();
		}
		else{
			return view('admin.user.store');
			
		}
		
		
		
	}
	
	public function update(Request $request,$id) {
		$user=User::find($id);
		if($request->isMethod('post')){
			$input=$request->only('name','phone','email');
			$input['role']='user';
			if(!is_Null($request->input('password')))
			{	
				$input['password']=Hash::make($request->input('password'));
                       }
			$user->update($input); 
			return redirect('/admin/user');
		}
		else{
			$arr['user']=$user;
			return view('admin.user.edit',$arr);
			
		}
		
		
		
		
	}
	
	public function destroy(Request $request,$id) {
			$user=User::find($id);
		if($request->isMethod('post')){
			 $user->delete();
			return redirect('/admin/user');
		}
		else{
			$arr['user']=$user;
			return view('admin.user.delete',$arr);
			
		}
		
		
		
		
	}
	
	
	
}
