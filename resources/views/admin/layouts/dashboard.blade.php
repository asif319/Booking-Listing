<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Asif</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/colors/main.css') }}" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">

			@include('admin.partials.header')

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

    @include('admin.partials.side_nav')
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
                    @foreach($admin as $a)
					<h2>Hello {{ $a->name }}!</h2>
                    @endforeach
					<!-- Breadcrumbs -->
				</div>
			</div>
		</div>

		<!-- Notice -->


		<!-- Content -->
		<div class="row">

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-1">
					<div class="dashboard-stat-content"><h4>{{ count($listing) }}</h4> <span>Active Listings</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
				</div>
			</div>

			<!-- Item -->
			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-3">
					<div class="dashboard-stat-content"><h4>{{ count($user) }}</h4> <span>Active Users</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
				</div>
			</div>

			<!-- Item -->
		</div>


		<div class="row">

			<!-- Recent Activity -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box with-icons margin-top-20">
					<h4>User's Name</h4>
                    @foreach($profile as $profiles)
					<ul>
						<li>
							<i class="list-box-icon sl sl-icon-layers"></i> {{ $profiles->full_name }}
						</li>
					</ul>
                        @endforeach
				</div>
			</div>

			<!-- Invoices -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box invoices with-icons margin-top-20">
					<h4>Listings Name</h4>
                    @foreach($listing as $listings)
					<ul>
						<li><i class="list-box-icon sl sl-icon-doc"></i>
							<ul>
								<li>{{ $listings->title }}</li>
							</ul>
						</li>
					</ul>
                        @endforeach
				</div>
			</div>


			<!-- Copyrights -->
			@include('admin/partials/footer')
			{{--<div class="col-md-12">--}}
				{{--<div class="copyrights">© 2017 Asif. All Rights Reserved.</div>--}}
			{{--</div>--}}
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>


</body>
</html>
