 @extends('layouts.admin')
@section('content')

@section('title')
All Photo
@endsection
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
												<a href="/admin/photo/add" class="btn btn-info" style="margin:10px;">Add images</a>

                        <div class="panel-heading">
                     All Photots
							
							
						 
						
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           @foreach($photo as $photo)
							
				        <a href="/photo/{{$photo->id}}/delete" >	
					    <img src="{{url('/images/'.$photo->path)}}" style="width:100px;height:100px;box-shadow:2px 2px 2px black;">
							
							</a>	
							@endforeach
						</div>
						
					</div>
	 </div>
</div>
@endsection