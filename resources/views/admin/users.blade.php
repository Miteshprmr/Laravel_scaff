@extends('main')

@section('title', 'Dashboard')

@section('page', 'User List')

@section('content')

	<div class="page-container">
		<!-- Page container -->
		<div class="page-container">

	
    		@include('admin.partials._sidebar')


			<div class="login-container">
				<!-- Main content -->
				<div class="content-wrapper">

    				@include('admin.partials._pageHeader')

					<!-- Content area -->
					<div class="content content-width">

						<!-- Collapsible lists -->
						<div class="row">
							<div class="col-md-10 col-md-offset-1 col-xs-5 col-xs-offset-1">

								<!-- Collapsible list -->
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title"></h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                	</ul>
					                	</div>
									</div>

									<ul class="media-list media-list-linked">
										@foreach($users as $user)
										<li class="media">
											<div class="media-link cursor-pointer" data-toggle="collapse" data-target="#{{$user->id}}">
												<div class="media-left"><img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($user->email))) . "?s=50&d=wavatar"}}" class="img-circle" alt=""></div>
												<div class="media-body">
													<div class="media-heading text-semibold">{{$user->name}}</div>
													@if($user->is_subscriber)
														<div class="media-right media-middle subscriber">
															<span class="label label-success">Subscriber</span>
														</div>
													@endif
												</div>
												<div class="media-right media-middle text-nowrap">
													<i class="icon-menu7 display-block"></i>
												</div>
											</div>

											<div class="collapse" id="{{$user->id}}">
												<div class="contact-details">
													<div class="row">
														<div class="col-sm-6">
															<ul class="list-extended list-unstyled list-icons">
																<li><i class="icon-pin position-left"></i> {{$user->city}} {{$user->state}}</li>
																@if($user->occupation)
																	<li><i class="icon-user-tie position-left"></i> {{$user->occupation}}</li>
																@endif
																<li><i class="icon-phone position-left"></i> {{$user->phone_number}} </li>
																<li><i class="icon-mail5 position-left"></i> <a href="#">{{$user->email}}</a></li>
															</ul>
														</div>
														<div style="margin-top: 85px;">
														<div class="col-sm-2 col-sm-offset-1">
															{!! Html::linkRoute('admin.user.edit', 'Edit', array($user->id), array('class' => 'btn btn-primary btn-block')) !!}
														</div>
														<div class="col-sm-2">
															{!! Form::open(['route' => ['admin.user.delete', $user->id], 'method' => 'DELETE']) !!}

															{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

															{!! Form::close() !!}
														</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										@endforeach
									</ul>
								</div>
								<!-- /collapsible list -->

							</div>
						</div>
						<!-- /collapsible lists -->
@endsection
