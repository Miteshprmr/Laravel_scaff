@extends('main')

@section('title', 'Dashboard')

@section('page', 'Dashboard')

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
					<div class="row">
						<div class="col-md-6">
							<div class="panel bg-primary">
								<div class="panel-heading">
									<h6 class="panel-title">Primary solid</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Primary solid panel using <code>.bg-primary</code> class
								</div>
							</div>

							<div class="panel bg-danger">
								<div class="panel-heading">
									<h6 class="panel-title">Danger solid</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Danger solid panel using <code>.bg-danger</code> class
								</div>
							</div>

						</div>

						<div class="col-md-6">
							<div class="panel bg-warning">
								<div class="panel-heading">
									<h6 class="panel-title">Warning solid</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Warning solid panel using <code>.bg-warning</code> class
								</div>
							</div>
							
							<div class="panel bg-success">
								<div class="panel-heading">
									<h6 class="panel-title">Success solid</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Success solid panel using <code>.bg-success</code> class
								</div>
							</div>


						</div>
					</div>
					<!-- /solid color panels -->


@endsection

@section('scripts')

	{!! Html::script('js/plugins/uniform.min.js') !!}
	{!! Html::script('js/dashboard.js') !!}

@endsection
