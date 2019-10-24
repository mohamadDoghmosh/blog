@extends('layouts.admin')
@section('title')
Edit section

@endsection


@section('content')



      <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Primary Panel
                        </div>
                        <div class="panel-body">
                         <form method="post" action="">
				{{ csrf_field() }} 

	
  <div class="form-group">
	  
	  
    <label >Section name</label>
	  
        <input type="text" name="name" class="form-control" value="{{$section->name}}" placeholder="">

  </div>

		
<select class="form-control" name="name_role">
  <option>Default select</option>
	@foreach($users as $user)
	<option value="{{$user->id}}"  >{{$user->name}}</option>
	@endforeach
	@if(!is_null($section->Admin))
		<option value="{{$section->Admin->id}}" selected="selected" >{{$section->Admin->name}}</option>
@endif
</select>
	
	<br>
	<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>                  


@endsection