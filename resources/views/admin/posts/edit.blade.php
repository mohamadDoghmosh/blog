@extends('layouts.admin')
@section('content')
@section('title')
Edit Post

@endsection
      <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
Post Info
						</div>
                        <div class="panel-body">
                         <form method="post" action="update">
				{{ csrf_field() }} 

	
  <div class="form-group">
	  
	  
    <label >title Post</label>
	  
        <input type="text" name="title" value="{{$post->title}}" class="form-control"  placeholder="title">

  </div>
	<div class="form-group">
	  
	  
	  
<textarea name="content" >{{$post->content}}
		</textarea>
  </div>						 
<select class="form-control" name="section_id">
	@foreach($section as $section)
	<option value="{{$section->id}}" {{ $section->id==$post->section->id?'selected="selected' : ''    }} > {{$section->name}}</option>
	@endforeach
</select>
		

	
	<br>
	<br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>   





<div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
Post Info
						</div>
                        <div class="panel-body">
							@foreach($photos as $photos)
						<img src="{{url('images/'.$photos->path)}}" width="100px" height="100px">	
							<br>
							<input type ="checkbox"  name="photos[]" values="{{$photos->id}}">
							
	             </div>
					@endforeach	
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>  

@endsection