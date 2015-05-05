<div class="col-sm-2 col-xs-12 sidebar-offcanvas" id="sidebar">
  <div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="{{route('admin.index')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
					<!-- Dropdown-->
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl1">
							<span class="glyphicon glyphicon-user"></span> Administrator <span class="caret"></span>
						</a>
						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="{{route('admin.all')}}">All Users <span class="badge">{{$users->total()}}</span></a></li>
									<li><a href="{{route('admin.operators')}}">Operators <span class="badge">{{$operators->total()}}</span></a></li>
									<li><a href="{{route('admin.teachers')}}">Teachers <span class="badge">{{$teachers->total()}}</span></a></li>
									<li><a href="#">Students <span class="badge">{{$students->total()}}</span></a></li>
								</ul>
							</div>
						</div>
					</li>
					<!-- Dropdown-->
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-statistic">
                            <span class="glyphicon glyphicon-signal"></span> Statistic <span class="caret"></span>
                        </a>

                        <!-- Dropdown level 1 -->
                        <div id="dropdown-statistic" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">General</a></li>
                                    <li><a href="#">Users</a></li>
                                    <li><a href="#">Link</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{route('admin.show', ['username' => Auth::User()->username])}}"><span class="glyphicon glyphicon-dashboard"></span> Profile</a></li>
                    <li><a href="{{url('auth/logout')}}"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
  </div>
</div>