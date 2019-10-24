 @extends('layouts.admin')
@section('content')

@section('title')
All Message
@endsection
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                     All message
							
							
						 
						
						</div>
                        <!-- /.panel-heading -->
                     


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       	<th></th>

                                        <th>Name</th>
										<th>E-mail</th>
										<th>Phone</th>
										<th>Read at</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
										@foreach($msgs as $msg)
										<tr class="odd gradeX">
                                        <td><i class="fa fa-envelope {{is_Null($msg->read_at)?'' :'-o'}}"></i></td>
                                        <td>{{$msg->data['name']}}</td>
										<td>{{$msg->data['email']}}</td>
										<td>{{$msg->data['phone']}}</td>
										<td>{{$msg->read_at}}</td>


											<td>
											
											<a href="/admin/messages/read/{{$msg->id}}" class="btn btn-info">Read</a>
											<a href="/admin/section/{{$msg->id}}/delete" class="btn btn-danger">Delete</a>

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