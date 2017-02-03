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
					
					<!-- Content area -->
					<div class="content content-width">

@endsection

@section('scripts')

	{!! Html::script('js/plugins/uniform.min.js') !!}
	{!! Html::script('js/dashboard.js') !!}

@endsection
