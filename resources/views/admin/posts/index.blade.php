 @extends('layouts.admin')
@section('content')

@section('title')
All Post
@endsection
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                     All Post
							
							
						 
						
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href="/admin/post/add" class="btn btn-info" style="margin:10px;">Add post</a>
						


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th>Section name</th>
										  <th>posted by</th>
										  <th>Date</th>


                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
										@foreach($post as $post)
										<tr class="odd gradeX">
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
										 <td>{{$post->Section->name}}</td>
										<td>{{$post->User->name}}</td>

                                        <td>{{$post->created_at}}</td>

											<td>
											
											<a href="/admin/post/{{$post->id}}/edit" class="btn btn-warning">Update</a>
											<a href="/admin/post/{{$post->id}}/delete" class="btn btn-danger">Delete</a>

											</td>
											</tr>
                                       @endforeach
                                    
								</tbody>
							</table>
						</div>
					</div>
	 </div>
</div>
@endsection