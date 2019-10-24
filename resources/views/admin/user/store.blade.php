@extends('layouts.admin')
@section('content')
@section('title')
Add User

@endsection
      <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
							Add User

                       </div>
                        <div class="panel-body">
                         <form method="post" action="">
				{{ csrf_field() }} 

	
  <div class="form-group">
	  
	  
    <label >name</label>
	  
        <input type="text" name="name" class="form-control"  placeholder="">

  </div>
<div class="form-group">
	  
	  
    <label > Email</label>
	  
        <input type="text" name="email" class="form-control"  placeholder="">

  </div>
	<div class="form-group">
	  
	  
    <label >Phone</label>
	  
        <input type="text" name="phone" class="form-control"  placeholder="">

  </div>
	<div class="form-group">
	  
	  
    <label >Password</label>
	  
        <input type="text" name="password" class="form-control"  placeholder="">

  </div>						 

	
	<br>
	<br>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>                  


@endsection