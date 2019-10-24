@extends('layouts.admin')
@section('content')
@section('title')
Show Messagge

@endsection
      <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           {{$msg->data['name']}}
                        </div>
                        <div class="panel-body">
    {{$msg->data['message']}}
							
							
                        </div>
                        <div class="panel-footer">
  <a href="/admin/messages" class="btn btn-primary">Back</a>

						
						
						</div>
                    </div>
                </div>                  


@endsection