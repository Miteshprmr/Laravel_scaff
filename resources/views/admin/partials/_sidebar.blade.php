
<!-- Main sidebar -->
<div class="sidebar sidebar-main">
	<div class="sidebar-content">

		<!-- User menu -->
		<div class="sidebar-user">
			<div class="category-content">
				<div class="media">
					<!-- <a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a> -->
					<div class="media-body">
						<span class="media-heading text-semibold">{{$admin->name}}</span>
						<div class="text-size-mini text-muted">
							<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- /user menu -->


		<!-- Main navigation -->
		<div class="sidebar-category sidebar-category-visible">
			<div class="category-content no-padding">
				<ul class="navigation navigation-main navigation-accordion">

					<!-- Main -->
					<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
					<li class="{{ Request::is('admin') ? "active" : "" }}"><a href="/admin"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
					<li  class="{{ Request::is('admin/users') ? "active" : "" }}">
						<a href="{{ route('admin.users') }}"><i class="icon-people"></i> <span>User List</span></a>
					</li>
					<!-- /main -->

				</ul>
			</div>
		</div>
		<!-- /main navigation -->

	</div>
</div>
<!-- /main sidebar -->
