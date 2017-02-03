@extends('main')

@section('title', 'Dashboard')

@section('mid-page', 'User List')
@section('mid-page-link', route('admin.users') )
@section('page', 'User Edit')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

	<div class="page-container">
		<!-- Page container -->
		<div class="page-container">

	
    		@include('admin.partials._sidebar')


			<div class="login-container">
				<!-- Main content -->
				<div class="content-wrapper">

    				@include('admin.partials._pageHeader')
		    		@include('partials._messages')

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
						                		<li id="refreshform"><a data-action="reload"></a></li>
						                	</ul>
					                	</div>
									</div>

									{!! Form::open(array('id'=>'form', 'class' =>'form-horizontal', 'data-parsley-validate' => '')) !!}

									<div class="panel-body">
										<div class="form-group">
											<label class="col-lg-3 control-label">Name:</label>
											<div class="col-lg-9">
												{{ Form::text('name', $user->name, array('placeholder' => 'Name', 'class' => 'form-control', 'required' => '', 'data-parsley-required-message'=>'Name is required.')) }}
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Email:</label>
											<div class="col-lg-9">
												{{ Form::email('email', $user->email, array('placeholder' => 'Email', 'class' => 'form-control', 'required' => '', 'data-parsley-required-message'=>'Email is required.')) }}
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Password:</label>
											<div class="col-lg-9">
												{{ Form::password('password',array('class' => 'form-control')) }}
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">City:</label>
											<div class="col-lg-9">
												{{ Form::text('city', $user->city, array('placeholder' => 'City', 'class' => 'form-control')) }}
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">State:</label>
											<div class="col-lg-9">
												{{ Form::text('state', $user->state, array('placeholder' => 'State', 'class' => 'form-control', 'required' => '', 'data-parsley-required-message'=>'State is required.')) }}
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Occupation:</label>
											<div class="col-lg-9">
												{{ Form::text('occupation', $user->occupation, array('placeholder' => 'Occupation', 'class' => 'form-control')) }}
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Phone:</label>
											<div class="col-lg-9">
												{{ Form::text('phone_number', $user->phone_number, array('placeholder' => 'Phone', 'class' => 'form-control', 'required' => '', 'data-parsley-required-message'=>'Phone Number is required.')) }}
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Subscriber:</label>
											<div class="col-lg-9">

												<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
													@if($user->is_subscriber)
														<input type="checkbox" class="switch" checked="checked" name="is_sub">
													@else
														<input type="checkbox" class="switch" name="is_sub">
													@endif
												</label>

											</div>
										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
									{!! Form::close() !!}
								</div>


								<!-- /collapsible list -->

							</div>
						</div>
						<!-- /collapsible lists -->
@endsection

@section('scripts')

	{!! Html::script('js/core/parsley.min.js') !!}
	{!! Html::script('js/plugins/uniform.min.js') !!}
	{!! Html::script('js/plugins/switchery.min.js') !!}

@endsection
