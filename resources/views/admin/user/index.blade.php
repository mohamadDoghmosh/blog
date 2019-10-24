 @extends('layouts.admin')
@section('content')

@section('title')
All User
@endsection
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                     All Users
							
							
						 
						
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href="/admin/user/add" class="btn btn-info" style="margin:10px;">Add user</a>
						


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name </th>
                                        <th>E_mail</th>
										 <th>role</th>
										
                                        <th>phone</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
										@foreach($user as $user)
										<tr class="odd gradeX">
										<td>{{$user->name}}</td>

										 <td>{{$user->email}}</td>
										<td>{{$user->role}}</td>

	                                       <td>{{$user->phone}}</td>

											<td>
											
											<a href="/admin/user/{{$user->id}}/update" class="btn btn-warning">Update</a>
											<a href="/admin/user/{{$user->id}}/delete" class="btn btn-danger">Delete</a>

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