<!-- top navigation -->
<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="{{ Session::get('avatar') }}" alt="">{{ Session::get('user') }}
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li>
							<a href="/form/user/{{ Session::get('login_id') }}"> Profile</a>
						</li>
						<li>
							<a href="/app/settings"> Settings</a>
						</li>
						<li>
							<a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
<!-- /top navigation -->