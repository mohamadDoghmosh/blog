@extends('layouts.admin')
@section('title')
Delete post

@endsection


@section('content')



      <div class="col-lg-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
							{{$post->title}} post
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