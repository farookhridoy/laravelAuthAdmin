<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
	<meta charset="utf-8"/>
	<title>{{ config('app.name', 'Hpalak.com') }} | {{isset($pageTitle)?$pageTitle:''}}</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	@if(Session::has('shortcut_icon'))
	<?php  $shortcut_icon = Session::get('shortcut_icon'); ?>
	<link rel="shortcut icon" href="{{URL::to('uploads/generel_file/')}}/{{$shortcut_icon->value}}"/>
	@endif
	@include('Admin::layouts.css')
	@include('Admin::layouts.js')
</head>
<body class="theme-red">
	<!-- Page Loader -->
<div class="page-loader-wrapper" id="page-loader-wrapper">
<div class="loader">
<div class="preloader">
<div class="spinner-layer pl-red">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
<p>Please wait...</p>
</div>
</div>
<!-- #END# Page Loader -->

<!-- Top Bar -->
<nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
			<a href="javascript:void(0);" class="bars"></a>
			<a class="navbar-brand" style="color: white" href="{{URL::to(config('global.prefix_name').'/dashboard')}}">{{__('messages.sitename')}} :: {{__('messages.dashboard')}} </a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>   
					<a type="button"  target="__blank" href="{{URL::to('/')}}" class="btn btn-info" onclick="return confirm('Are you sure to go home page ?')" style="margin-top: 10px;height: 40px;background: #f44336;">
						<i class="material-icons">home</i>
						<span>{{__('messages.VisitSite')}}</span>
					</a>
				</li>
				<li>   
					<a type="button" href="{{ route('admin.user.password.reset', Auth::guard()->user()->id) }}" class="btn btn-info" style="margin-top: 10px;height: 40px;background: #f44336;">
						<i class="material-icons">lock</i>
						<span>{{__('messages.password_change')}}</span>
					</a>

				</li>
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle btn btn-info" data-toggle="dropdown" role="button" style="margin-top: 10px;height: 40px;">
						<i class="material-icons">language</i>
						<span>{{__('messages.language-change')}}</span>
					</a>
					<ul class="dropdown-menu" style="height:100px; width: 100px">
						<li class="body">
							<ul class="menu">
								<li>
									<a href="{{ url('locale/en') }}">
										<div class="menu-info">
											<h4><img src="{{URL::to('flag/en.jpg')}}" class="img-circle" alt=""><span style="margin-left: 5px;">English</span></h4>
										</div>
									</a>
								</li>
								<li>
									<a href="{{ url('locale/bn') }}"><div class="menu-info">
										<h4><img src="{{URL::to('flag/bn.jpg')}}" class="img-circle" alt=""><span style="margin-left: 5px;">Bangla</span></h4></div>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a type="button" href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();" class="btn btn-danger"
				style="margin-top: 10px;height: 40px;background: #f44336;">
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
				<i class="material-icons">input</i><span>{{__('messages.Logout')}}</span></a>
			</li>
		</ul>
	</div>
</div>
</nav>
<!-- #Top Bar -->
<section>
	@include('Admin::layouts.nav')
</section>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			@include('Admin::error.msg')
			@yield('body')
		</div>
	</div>
</section>
<!-- end page container -->

@include('Admin::layouts.footer_js')
</body>
</html>


