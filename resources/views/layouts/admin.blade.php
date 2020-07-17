<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body id="fix-header">
	<div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-static-top m-b-0">
			@include('includes.navbar')
		</nav>
	</div>
	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav slimscrollsidebar">
			@include('includes.sidebar')
		</div>
	</div>
	<div id="page-wrapper">
		@yield('content')
		@include('includes.footer')
	</div>
	@include('includes.javascript')
	@yield('javascript')
</body>
</html>