@extends('main')

@section('title', 'Dashboard')

@section('content')

	<div class="page-container">
		<!-- Page container -->
		<div class="page-container">

	
    		@include('admin.partials._sidebar')


			<div class="login-container">
				<!-- Main content -->
				<div class="content-wrapper">

					<!-- Content area -->
					<div class="content">


					<div style="height:530px"></div>
@endsection

@section('scripts')

	{!! Html::script('js/plugins/uniform.min.js') !!}
	{!! Html::script('js/dashboard.js') !!}

@endsection
