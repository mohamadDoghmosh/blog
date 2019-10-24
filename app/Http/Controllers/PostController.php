<?php

namespace App\Http\Controllers;
use App\Section;
use App\Photo;
use Illuminate\Support\Facades\Auth;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$post=Post::all();
		$arr['post']=$post;
		    return view('admin.posts.index',$arr);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		
				if ($request->isMethod('post')) {
$user=Auth::user();
					$post=$user->posts()->create ($request->all());
	$post->photos()->attach($request->input('photos'));
return redirect()->back();     

}
else {
	
	$photos=Photo::all();
	$arr['photos']=$photos;
$section =Section::select('name', 'id')->get();
	$arr['section']=$section;

    return view('admin.posts.store', $arr);
}
	

	
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post,Request $request,$id)
    {
		
		
        	$section=Section::all();
		$arr['section']=$section;
			$photos=Photo::all();
		$arr['photos']=$photos;
		$post=Post::find($id);
		$arr['post']=$post;
		    return view('admin.posts.edit', $arr);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post,$id)
    {
        //$post=Post::find($id);
				$post=Post::find($id);

				$post->update($request->all());
//$post->photos()->detach();
		$post->photos()->attach($request->input('photos'));
return redirect()->back();     

		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $post,$id)
    {
        //
		
		    							  $post = post::find($id);

					if ($request->isMethod('post')) {
						                              $post->delete();


	                          return redirect('/admin/post');

}
else {
		$arr['post']=$post;

	
	
    return view('admin.posts.delete',$arr);
}

		
		
		
		
		
		
    }
}
