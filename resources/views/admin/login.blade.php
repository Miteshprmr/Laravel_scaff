@extends('main')

@section('title', 'Login')


@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection


@section('content')
	
	<div class="login-container">
		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main content -->
				<div class="content-wrapper">

					<!-- Content area -->
					<div class="content">

						<!-- Simple login form -->
						{!! Form::open(array('data-parsley-validate' => '')) !!}
							<div class="panel panel-body login-form">
								<div class="text-center">
									<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
									<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
								</div>

								<div class="form-group has-feedback has-feedback-left">
								{{ Form::email('email', null, array('placeholder' => 'Email', 'class' => 'form-control', 'required' => '', 'data-parsley-required-message'=>'Email is required.')) }}
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

								<div class="form-group has-feedback has-feedback-left">
								{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'required' => '', 'data-parsley-required-message'=>'Password is required.')) }}
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
								</div>

								<div class="text-center">
									<a href="login_password_recover.html">Forgot password?</a>
								</div>
							</div>
						{!! Form::close() !!}
						<!-- /simple login form -->

@endsection

@section('scripts')

	{!! Html::script('js/core/parsley.min.js') !!}

@endsection
