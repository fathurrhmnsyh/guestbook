<!doctype html>
<html lang="en">

<head>
	<title>ITCS | Demo</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('backend/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend/img/apple-icon2.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('backend/img/favicon2.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="{{asset('backend/img/itcs-logo-white.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('backend/img/user.png')}}" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.html" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel panel-headline">
					<div class="container-fluid">
						<div class="panel-heading">
							<h3 class="panel-title">Weekly Overview</h3>
							<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
						</div>
						<div class="row">
							<div class="col-md-12">
								<!-- BASIC TABLE -->
								<div class="panel">
									<div class="panel-body">
										<table class="table">
											<thead>
												<tr>
													<th>#</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Username</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Steve</td>
													<td>Jobs</td>
													<td>@steve</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Simon</td>
													<td>Philips</td>
													<td>@simon</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Jane</td>
													<td>Doe</td>
													<td>@jane</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- END BASIC TABLE -->
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2020 <a href="https://www.pttrimitra.com" target="_blank">IT Dept</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('backend/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('backend/scripts/klorofil-common.js')}}"></script>
</body>

</html>
