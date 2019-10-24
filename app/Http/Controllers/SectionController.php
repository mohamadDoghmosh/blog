<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		
		$section=Section::select('id','name','name_role')->get();
		//return view ('admin.section.index',compact('section'));
		
			$arr['section']=$section;
		return view ('admin.section.index',$arr);
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
      
		if ($request->isMethod('post')) {

	Section::create ($request->all());
return redirect()->back();     

}
else {
$users = User::select('name', 'id')->where('role','user')->get();
    return view('admin.section.store', compact('users'));
}
	

	  		
	       
   

		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
					 $section = Section::find($id);

		
				if ($request->isMethod('post')) {



}
else {
$users = User::select('name', 'id')->where('role','user')->get();
	$arr['users']=$users;
	$arr['section']=$section;
        return view('admin.section.edit',$arr);
}

		
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
		
							 $section = Section::find($id);

		
				if ($request->isMethod('post')) {
               $section->delete();
					
	return redirect('/section');


}
else {

	$arr['section']=$section;
        return view('admin.section.delete',$arr);
}
		
		
		
		
    }
}
