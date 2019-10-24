<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		
		$photo=Photo::select('id','path')->get();
		
			$arr['photo']=$photo;
		return view ('admin.photo.index',$arr);
		
		
		
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
$photo=$request->file('photo');
				$path=$photo->storeAs('post',$photo->getClientOriginalName(),'images');
	Photo::create ([
	'path'=>$path
		
	]);
return redirect()->back();     

}
else {
    return view('admin.photo.store');
}
	

		
		
		
		
		
		
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        							  $photo = Photo::find($id);

					if ($request->isMethod('post')) {
						                              $photo->delete();


	                          return redirect('/photo');

}
else {
		$arr['photo']=$photo;

	
	
    return view('admin.photo.delete',$arr);
}

					
		
		
		
    }
}
