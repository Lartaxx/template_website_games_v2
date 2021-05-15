{% if session and session.name %}
	{% set player_name = session.name %}
{% else %}
	{% set player_name = "Invité" %}
{% endif %}
<!DOCTYPE html>
<html class="no-js" lang="fr-FR">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- preloader end -->
		

    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                  <img src="assets/img/logo/logo.svg" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="page-scroll active" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">+ sur nous</a>
                    </li>
					<li class="nav-item">
                      <a class="page-scroll" href="#news">Actualités</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#service">Nos avantages</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="#0">Contact</a>
                    </li>
					
					{% if session and session.name %}
						<li class="nav-item">
                      	<a class="" href="./deconnexion">Déconnexion</a>
                    	</li>
					{% else %}
						<li class="nav-item">
						<a class="" href="./connexion">Connexion</a>
						</li>
					{% endif %}
					{% if session and session.admin == 1 %}
						<li class="nav-item">
						<a class="" href="./admin"><strong>Panel Administrateur</strong></a>
						</li>
					{% endif %}
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
			<span class="wow fadeInLeft" data-wow-delay=".2s">Bienvenue, {{ player_name }}</span>
              <h2 class="wow fadeInUp" data-wow-delay=".4s"><sup>“</sup> Je suis sacrément beau <sup>”</sup></h2>
            </div>
					</div>
					<div class="col-lg-6">
						<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
							<img src="assets/img/hero/hero-img.svg" alt="">
						</div>
					</div>
        </div>
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->


		<!-- ========================= about-section start ========================= -->
		<section id="about" class="about-section pt-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-img mb-50">
							<img src="assets/img/about/about-img.svg" alt="about">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content mb-50">
							<div class="section-title mb-50">
								<h1 class="mb-25">Read more about our Digital Agency</h1>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
							</div>
							<div class="accordion pb-15" id="accordionExample">
								<div class="single-faq">
									<button class="w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Which Service We Provide?
									</button>
							
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="faq-content">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
								<div class="single-faq">
									<button class="w-100 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										What I need to start design?
									</button>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="faq-content">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
								<div class="single-faq">
									<button class="w-100 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										What  is our design process?
									</button>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="faq-content">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
							</div>
							<a href="javascript:void(0)" class="main-btn btn-hover">View More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= about-section end ========================= -->
		<section id="news" class="service-section img-bg pt-100 pb-100 mt-150">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
						<div class="section-title text-center mb-50">
							<h1>Actualités : </h1>
							<p><b>{{ all_annonces|length }}</b> actualités à découvrir !</p>
						</div>
					</div>
				</div>

				<div class="row">
				{% for annonce in all_annonces %}
					<div class="col-lg-6">
						 <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Acualité n°{{ loop.index }} - {{ annonce.title }}</h6>
                                </div>
                                <div class="card-body">
                                    <p>{{ annonce.content }}</p> <br><hr><br><span style="font-size: 12px"> Par : {{ annonce.by_admin }} <br> Date : {{ annonce.date }}</span>
                                </div>
                            </div>
					</div>
					{% endfor %}
				</div>
		</section>
		<!-- ========================= service-section start ========================= -->
		<section id="service" class="service-section img-bg pt-100 pb-100 mt-150">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
						<div class="section-title text-center mb-50">
							<h1>Our services</h1>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-1">
								<i class="lni lni-layers"></i>
							</div>
							<div class="content">
								<h3>UI/UX design</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-2">
								<i class="lni lni-code-alt"></i>
							</div>
							<div class="content">
								<h3>Web design</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-3">
								<i class="lni lni-pallet"></i>
							</div>
							<div class="content">
								<h3>Graphics design</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-4">
								<i class="lni lni-vector"></i>
							</div>
							<div class="content">
								<h3>Brand design</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="view-all-btn text-center pt-30">
					<a href="javascript:void(0)" class="main-btn btn-hover">View All Services</a>
				</div>

			</div>
		</section>
		<!-- ========================= service-section end ========================= -->

		<!-- ========================= counter-up-section start ========================= -->
		<section class="counter-up-section pt-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="counter-up-content mb-50">
							<div class="section-title mb-40">
								<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">Why we are the best, Why you hire?</h1>
								<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
							</div>
							<div class="counter-up-wrapper">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-1">
												<i class="lni lni-emoji-smile"></i>
											</div>
											<div class="content">
												<h1 id="secondo1" class="countup" cup-end="3642" cup-append=" ">3642</h1>
												<span>Happy client</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-2">
												<i class="lni lni-checkmark"></i>
											</div>
											<div class="content">
												<h1 id="secondo2" class="countup" cup-end="5436" cup-append=" ">5436</h1>
												<span>Project done</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-3">
												<i class="lni lni-world"></i>
											</div>
											<div class="content">
												<h1 id="secondo3" class="countup" cup-end="642" cup-append="K">642</h1>
												<span>Live Design</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-4">
												<i class="lni lni-users"></i>
											</div>
											<div class="content">
												<h1 id="secondo4" class="countup" cup-end="42" cup-append=" ">42</h1>
												<span>Creative designer's</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="counter-up-img mb-50">
							<img src="assets/img/counter-up/counter-up-img.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= counter-up-section end ========================= -->

		<!-- ========================= cta-section start ========================= -->
		<section class="cta-section img-bg pt-110 pb-60">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-7">
						<div class="section-title mb-50">
							<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">Have any project in you mind? You can hire</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-5">
						<div class="cta-btn text-lg-end mb-50">
							<a href="javascript:void(0)" class="main-btn btn-hover text-uppercase">LET'S START YOUR PROJECT</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= cta-section end ========================= -->

    <!-- ========================= footer start ========================= -->
		<footer class="footer">
			<div class="container">
				<div class="widget-wrapper">
					<div class="row">
						<div class="col-xl-3 col-md-6">
							<div class="footer-widget">
								<div class="logo mb-35">
									<a href="index.html"> <img src="assets/img/logo/logo.svg" alt=""> </a>
								</div>
								<p class="desc mb-35">We are expert designer team, There have a lot of designer and developer If you have any project you can hire Create a website.</p>
								<ul class="socials">
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-facebook-filled"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-twitter-filled"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-instagram-filled"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-xl-2 offset-xl-1 col-md-5 offset-md-1 col-sm-6">
							<div class="footer-widget">
								<h3>Link</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">Home</a> </li>
									<li> <a href="javascript:void(0)">About</a> </li>
									<li> <a href="javascript:void(0)">Services</a> </li>
									<li> <a href="javascript:void(0)">Portfolio</a> </li>
									<li> <a href="javascript:void(0)">Pricing</a> </li>
									<li> <a href="javascript:void(0)">Team</a> </li>
									<li> <a href="javascript:void(0)">Contact</a> </li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 col-sm-6">
							<div class="footer-widget">
								<h3>Services</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">Graphic design</a> </li>
									<li> <a href="javascript:void(0)">Web design</a> </li>
									<li> <a href="javascript:void(0)">Visual design</a> </li>
									<li> <a href="javascript:void(0)">Product design</a> </li>
									<li> <a href="javascript:void(0)">UI/UX design</a> </li>
									<li> <a href="javascript:void(0)">Web development</a> </li>
									<li> <a href="javascript:void(0)">Startup business</a> </li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-md-6">
							<div class="footer-widget">
								<h3>Contact</h3>
								<ul>
									<li>+003894372632</li>
									<li>helldesigner@gmail.ccom</li>
									<li>United state of America</li>
								</ul>
								<div class="contact_map" style="width: 100%; height: 150px; margin-top: 25px;">
									<div class="gmap_canvas">
										<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="width: 100%;"></iframe>
									</div>
									</div>
							</div>
						</div>

					</div>
				</div>

				<div class="copy-right">
					<p>Front-end by <a href="https://uideck.com" rel="nofollow" target="_blank"> UIdeck </a><br> Back-end by <a href="https://lartaxx.a-dev.online" target="_blank">Lartaxx</a></p>
				</div>

			</div>
		</footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/polifill.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/sb-admin-2.min.js"></script>
  </body>
</html>
