<div class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".header-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="{{ url('/') }}">Laravel<span>.link</span></a>
		</div>

		<div class="collapse navbar-collapse header-collapse">
			<ul class="nav navbar-nav">

				{{ Navigation::make(Request::path()) }}

				@if(Auth::guest())
					<li class="visible-xs"><a href="{{ url('login') }}">Login</a></li>
				@else
					<li class="visible-xs"><a href="{{ url('user') }}">My profile</a></li>
					<li class="visible-xs"><a href="{{ url('logout') }}">Logout</a></li>
				@endif

			</ul>

			<div class="navbar-right hidden-xs">
				@if(Auth::guest())
					<a href="{{ url('login') }}" class="btn btn-primary">Login</a>
				@else
				<ul class="nav">
					<li class="dropdown {{( Request::segment(2) == 'settings' || Request::segment(2)=='favorites' ? 'active' : false )}}">
					  <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
					  <img src="{{ Auth::user()->photocss }}" width="26px" class="user-avatar-mini"> Profile
					  <b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu">
					  	<li class="{{( Request::segment('1') == 'user' && Request::segment('2') == '' ? 'active' : false )}}"><a href="{{ url('user')}}">My links</a></li>
					    <li class="{{( Request::segment('2') == 'favorites' ? 'active' : false )}}"><a href="{{ url('user/favorites')}}">My Favorites</a></li>
					    <li class="{{( Request::segment('2') == 'settings' ? 'active' : false )}}"><a href="{{ url('user/settings')}}">Settings</a></li>
					    @if(Auth::user()->is_admin == 1)
					    <li><a href="{{ url('admin/tags') }}">Admin - Tags</a></li>
					    <li><a href="{{ url('admin/categories') }}">Admin - Categories</a></li>
					    <li><a href="{{ url('admin/users') }}">Admin - Users</a></li>
					    @endif
					    <li><a href="{{ url('logout')}}">Logout</a></li>
					  </ul>
					</li>
				</ul>
				@endif
			</div>
		</div>

	</div>
</div>
