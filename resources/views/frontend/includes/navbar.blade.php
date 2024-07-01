<header class="header">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="topbar">
					<div class="cllml">
						<ul>
							<li><a href="#"> <img src="images/phone.png" alt="phone"> Call: 0141-2710072</a></li>
							<li><a href="#"> <img src="images/mail.png" alt="mail"> Email: jaipurricem@gmail.com</a></li>
						</ul>
					</div>
					<div class="azd_logo">
						<ul>
							<li><a href="#"><img src="images/g20.png" alt="g20"></a></li>
							<li><a href="#"><img src="images/azadi.png" alt="azadi"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main_head" id="myHeader">
				<div class="row">
					<div class="col-lg-2 col-md-3">
						<div class="logo">
							<a href="index.html"><img src="images/logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9">
						<div class="desk_menus">
							<h4>Rajasthan Institute of Cooperative Education and Management</h4>
							<nav class="navbar navbar-expand-lg navbar-light">
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												About us
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
												<li><a class="dropdown-item" href="#">Vision</a></li>
												<li><a class="dropdown-item" href="#">Mision</a></li>
											</ul>
										</li>
										<li class="nav-item"><a class="nav-link" href="#">Infrastructure</a></li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												Our Team
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
												<li><a class="dropdown-item" href="{{route('boardofdirectory')}}">Board Of Directors</a></li>
												<li><a class="dropdown-item" href="{{route('teamofmember')}}">Team Member</a></li>
											</ul>
										</li>
										<li class="nav-item"><a class="nav-link" href="{{route('traningprogramme')}}">Training</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Rooms</a></li>
										<li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">Photo Gallery</a></li>
										<li class="nav-item"><a class="nav-link" href="{{route('placementservice')}}">Placement Services</a></li>
										<li class="nav-item"><a class="nav-link" href="{{route('contact-us')}}">Contact Us</a></li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="mob_menus">
							<div class="header"></div>
							  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
							  <label for="openSidebarMenu" class="sidebarIconToggle">
								<div class="spinner diagonal part-1"></div>
								<div class="spinner horizontal"></div>
								<div class="spinner diagonal part-2"></div>
							  </label>
							  <div id="sidebarMenu">
								<ul class="sidebarMenuInner">
									<li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#">about Us</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Infrastructure</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Our Team</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Training</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Rooms</a></li>
									<li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Photo Gallery</a></li>
				                    <li class="nav-item"><a class="nav-link" href="{{route('contact-us')}}">Contact Us</a></li>
                                   <li class="nav-item"><a class="nav-link" href="{{ route('placementservice') }}">Placement Service</a></li>
								</ul>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


