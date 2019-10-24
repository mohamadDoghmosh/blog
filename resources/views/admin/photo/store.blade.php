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
                         <form method="post" action="" enctype="multipart/form-data">
				{{ csrf_field() }} 

	
  <div class="form-group">
	  
	  
    <label >Section name</label>
	  
        <input type="file" name="photo" class="form-control" value="upload" placeholder="">

  </div>


	
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