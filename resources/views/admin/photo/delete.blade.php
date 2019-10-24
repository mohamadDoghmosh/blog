@extends('layouts.admin')
@section('title')
Delete section

@endsection


@section('content')



      <div class="col-lg-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
							<img src="{{url('/images/'.$photo->path)}}" style="width:100px;height:100px;box-shadow:2px 2px 2px black;">

						
						
						
						</div>
                        <div class="panel-body">
                         <form method="post" action="">
				{{ csrf_field() }} 

	
  <label>Are You Sure?</label>
<br>
	
  <button type="submit" class="btn btn-danger" >delete</button>
</form>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>                  


@endsection