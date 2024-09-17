<header class="header">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-2 col-md-4 col-4 order-1 order-lg-1">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="logo"></a>
				</div>
			</div>
			<div class="col-lg-8 col-md-4 col-3 order-3 order-lg-2">
				<div class="menus">
					<nav class="navbar navbar-expand-lg navbar-light">
						<button class="navbar-toggler" type="button" onclick="sdbr_open()">
						  <span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-center" id="mySidebar">
							<ul class="navbar-nav m-auto mb-2 mb-lg-0">
								<button onclick="sdbr_close()" class="close">&times;</button>
								<li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="ourstory">Our Story</a></li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="fabric">Fabric & Trim Sourcing</a></li>
										<li><a class="dropdown-item" href="garment">Garment Manufacturing</a></li>
									</ul>
								</li>
								<li class="nav-item"><a class="nav-link" href="product">Products</a></li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact Us</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="buyer">Buyer- Make with us</a></li>
										<li><a class="dropdown-item" href="vendor">Vendor- Creat with us</a></li>
										<li><a class="dropdown-item" href="team">Team- Career with us</a></li>
									</ul>
								</li>
								<li class="nav-item"><a class="nav-link" href="sample">Sample</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-5 order-2 order-lg-3">
				<div class="prfl">
                    <a href="{{ asset('images/profile.pdf') }}" target="_blank">
                        <img src="{{ asset('images/pdf_icon.png') }}"> <span>Company Profile</span>
                    </a>
                </div>

			</div>
		</div>
	</div>
</header>
