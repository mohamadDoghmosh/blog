<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Section;
use App\Post;
use App\Comment;

class MainController extends Controller
{
    //
	
	public function index()
	
	{
		
		$section=Section::all();
		$arr['section']=$section;
		 return view ('web.main',$arr);
		
		
		
		
	}
		
	public function post($id)
	
	{
		
		$section=Section::find($id);
		$arr['section']=$section;
		$post=Post::all();
		$arr['post']=$post;
		 return view ('web.post',$arr);
		
		
		
		
	}
	public function singlepost(Request $request,$id)
	
	{
		
		$section=Section::find($id);

		$post=Post::find($id);
						if ($request->isMethod('post')) {
$post->comment()->create([
	'content'=>$request->input('comment'),
	'user_id'=>Auth::user()->id
	
]);
return redirect()->back();     


}else {		
							$arr['section']=$section;

							$arr['comment']=$post->comment;
							$arr['post']=$post;
		 return view ('web.single_post',$arr);
							
						}
		
	}
}
