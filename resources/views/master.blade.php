<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>API BLOG LARAVEL</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset("assets") }}/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset("assets") }}/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset("assets") }}/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset("assets") }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset("assets") }}/css/atlantis2.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset("assets") }}/css/demo.css">
</head>
<body>
	<div class="wrapper horizontal-layout-3">
		
		<div class="main-header no-box-shadow" data-background-color="blue2">
			<div class="nav-top">
				<div class="container d-flex flex-row">
					<button class="navbar-toggler sidenav-toggler2 ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="icon-menu"></i>
						</span>
					</button>
					<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
					<!-- Logo Header -->
					<a href="index.html" class="logo d-flex align-items-center">
						<img src="{{ asset("assets") }}/img/logo.svg" alt="navbar brand" class="navbar-brand">
					</a>
					<!-- End Logo Header -->

					<!-- Navbar Header -->
					<nav class="navbar navbar-header-left navbar-expand-lg p-0">
						<ul class="navbar-nav page-navigation pl-md-3">
							<h3 class="title-menu d-flex d-lg-none"> 
								Menu 
								<div class="close-menu"> <i class="flaticon-cross"></i></div>
							</h3>
							<li class="nav-item">
								<a class="nav-link " href="/blog"  >
									Blog
								</a>
							</li>
                            {{-- <li class="nav-item">
								<a class="nav-link " href="acara.html"  >
									Acara
								</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link " href="acara_diikuti.html"  >
									Acara Yang Di ikuti
								</a>
							</li> --}}

						</ul>
					</nav>
					<nav class="navbar navbar-header navbar-expand-lg p-0">
						<div class="container-fluid p-0">
							<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">





								{{-- <li class="nav-item dropdown hidden-caret">
									<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
										<div class="avatar-sm">
											<img src="{{ asset("assets") }}/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
										</div>
									</a>
									<ul class="dropdown-menu dropdown-user animated fadeIn">
										<div class="dropdown-user-scroll scrollbar-outer">
											<li>
												<div class="user-box">
													<div class="avatar-lg"><img src="{{ asset("assets") }}/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
													<div class="u-text">
														<h4>Hizrian</h4>
														<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
													</div>
												</div>
											</li>
											<li>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Logout</a>
											</li>
										</div>
									</ul>
								</li> --}}
							</ul>
						</div>
					</nav>
					<!-- End Navbar -->
				</div>
			</div>
		</div>

		<div class="main-panel">

			<div class="bg-primary2 pt-4 pb-5">
				<div class="container text-white py-2">
					<div class="d-flex align-items-center">
						<div class="mr-3">
							<h1 class="mb-3">Selamat Datang Di Website Blog</h1>
			
						</div>

					</div>
				</div>
			</div>

			<div class="container mt--5">
				<div class="page-inner mt--1">

                    <div class="card">
                        <div class="card-body">
                            <span class="text-info" ><i class="fa fa-info-circle"></i> Selamat Datang,Jika Ada Kendala Silahkan Hubungi Admin, Ray : 085156956206</span>
                        </div>
                    </div>

                  


         
                    @yield('content')
					
					


				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<nav class="pull-left">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="http://www.themekita.com">
								ThemeKita
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Help
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Licenses
							</a>
						</li>
					</ul>
				</nav>
				<div class="copyright ml-auto">
					2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
				</div>				
			</div>
		</footer>

	</div>
	<!--   Core JS Files   -->
	<script src="{{ asset("assets") }}/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{ asset("assets") }}/js/core/popper.min.js"></script>
	<script src="{{ asset("assets") }}/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="{{ asset("assets") }}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{ asset("assets") }}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset("assets") }}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <script src="{{ asset("assets") }}/js/plugin/owl-carousel/owl.carousel.min.js"></script>

	<!-- Atlantis JS -->
	<script src="{{ asset("assets") }}/js/atlantis2.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{ asset("assets") }}/js/demo.js"></script>
    
    <script>
        $('.owl-carousel').owlCarousel({
	nav:true, // Show next and prev buttons
	autoplaySpeed:300,
	navSpeed:400,
	items:1
})
    </script>

    @yield('js')
</body>
</html>