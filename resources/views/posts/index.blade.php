@extends('layouts.app')

@section('content')
                     <div class="col-lg-12">                     
                         <h3 class="p-5 text-center">
														All recent posts
													</h3>
										 </div>

										   <div class="col-lg-12">  
           
									   <div class="row">
												@foreach ($posts as $post)

												<div class="col-xl-3 col-lg-4 col-md-6 mt-3 mb-3" >
													<a href="{{ route('posts.show', $post->id ) }}">

													<div class="card border-0" style="box-shadow: 0px 1px 16px 2px #e6e6e6;">
													<div class="card-img-top img-fluid" style="height: 200px; background: url({{ $post->featured }}) no-repeat;     background-size: cover;" >
														
														</div>
														
														<div class="card-body ">
														<h6 class="text-dark">	{{ $post->title }}</h6>
														<p class="card-text"> </p>
														<div class="full row">
															<div class="col-2 pr-0"><img style="box-shadow: inset 0px 0px 0px 6px rgba(212, 210, 210, 0.67);     height: 30px !important;" src="{{ $post->profile->image }}" class="img-rounded" alt="" srcset=""></div>
															<div class="col-7 pl-0 mb-0"><p class="card-text"><small class="text-dark">{{ $post->profile->name }}</small></p>
														</div>
															<div class="col-3"><p class="card-text"><small class="text-muted"><i class="fa fa-thumbs-up pl-2"></i> <strong>{{ $post->likes->count() }}</strong></small></p></div>
													</div>
														
														</div>
													</div>

													</a>
												</div>
												

												@endforeach
										 </div>

										   </div>
                     
											
									
                               
                           
         
@endsection
