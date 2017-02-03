<!-- Page header -->
<div class="page-header page-header-default">
	<div class="page-header-content">
		<div class="page-title">
			<h4><span class="text-semibold">Admin</span> - @yield('page')</h4>
		</div>
	</div>

	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li><a href="/admin"><i class="icon-home2 position-left"></i> Admin</a></li>
			@if (View::hasSection('mid-page'))
				<li><a href=@yield('mid-page-link')>@yield('mid-page')</a></li>
			@endif
			<li class="active">@yield('page')</li>
		</ul>
	</div>
</div>
<!-- /page header -->
