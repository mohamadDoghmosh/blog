@extends('layouts.web')
@section('title')
 {{$post->tilte}} 
@endsection
@section('headerimage')

{{url('web/img/blog-img/bg3.jpg')}}
@endsection
@section('content')

 <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
										
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>{{$post->title}}</h5>
                                            </a>
                                            <p>{{$post->content}}</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">{{$post->user->name}}</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                     

                             

                               
                            
                            </div>
                        </div>
                    </div>
                </div>
	 @auth
	  <form method="post" action="" >
		  {{csrf_field()}}
											
				<textarea class="form-control" name="comment"> your Comment</textarea>
		  <br>
		  <input type="submit" class="btn btn-danger" value="send">
								</form>
	 <br>
	 @foreach($comment as $comment)
	     <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
										
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>{{$comment->user->name}}</h5>
                                            </a>
                                            <p>{{$comment->content}}</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author"></a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
			            

                                    </div>
	 @if($comment->user->id==Auth::user()->id or Auth::user()->name_role=='admin' )
	  <a href="" class="btn btn-info">Edite</a>
			 			 <a href="" class="btn btn-warning">Delete</a>
	 @endif
	 @endforeach
	 @endauth
	 
	 
</div>

















@endsection