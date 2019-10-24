 @extends('layouts.admin')
@section('content')

@section('title')
All Section
@endsection
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                     All Section
							
							
						 
						
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href="/admin/section/add" class="btn btn-info" style="margin:10px;">Add Section</a>
						


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name Section</th>
                                        <th>Admin</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
										@foreach($section as $section)
										<tr class="odd gradeX">
                                        <td>{{$section->id}}</td>
                                        <td>{{$section->name}}</td>
                                        <td>{{is_null($section->Admin)?'':$section->Admin->name }}</td>
											<td>
											
											<a href="/admin/section/{{$section->id}}/edit" class="btn btn-warning">Update</a>
											<a href="/admin/section/{{$section->id}}/delete" class="btn btn-danger">Delete</a>

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