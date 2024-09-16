<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>{{ config('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{ asset('assets') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
</head>
  <body id="index" >
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="{{ asset('') }}">
                <img src="{{ asset('assets') }}/images/logo.svg" alt="" class="logo" srcset="">
            </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="#index" class="nav-animate nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="#about" class="nav-animate nav-link">Sobre Nós</a></li>
	        	<li class="nav-item"><a href="#gallery" class="nav-animate nav-link">Galeria</a></li>
	        	<li class="nav-item"><a href="#services" class="nav-animate nav-link">Serviços</a></li>
	        	<li class="nav-item"><a href="#contact" class="nav-animate nav-link">Contato</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url({{ asset('assets') }}/images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">O espaço perfeito<span>para seu filho</span></h1>
            <p><a href="#contact" class="nav-animate btn btn-secondary px-4 py-3 mt-3">Contate-nos</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url({{ asset('assets') }}/images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Venha nos conhecer<span> e se apaixonar</span></h1>
            <p><a href="#contact" class="nav-animate btn btn-secondary px-4 py-3 mt-3">Contate-nos</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

    {{-- ABOUT SECTION --}}

    <section id="about" class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                  <h2 class="mb-4"><span>Sobre</span>Nós</h2>
                  <p>Conheça um pouco da nossa história</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
                    <h2 class="mb-4">Quem Somos?</h2>
                    <p class="text-justify">
                        Bem-vindo à Educacao Semear!
                        <br><br>
                        Na Educacao Semear, nossa missão é nutrir o potencial das crianças desde os primeiros dias de vida. Oferecemos um ambiente acolhedor e enriquecedor que vai do berçário ao Infantil 4, com o objetivo de apoiar o desenvolvimento integral dos pequenos em suas fases iniciais.
                        <br>
                        Nossa abordagem é fundamentada na compreensão de que cada criança é única e se desenvolve no seu próprio ritmo. Por isso, nossos programas são projetados para atender às necessidades específicas de cada faixa etária, promovendo o crescimento cognitivo, emocional e social através de atividades lúdicas e estimulantes.
                        <br>
                        Contamos com uma equipe de profissionais dedicados e experientes, que trabalham com carinho e empenho para criar experiências educativas que são tanto educativas quanto divertidas. Nosso currículo é cuidadosamente elaborado para garantir que as crianças explorem, descubram e aprendam de forma segura e prazerosa.
                        <br>
                        Na Educacao Semear, acreditamos que os primeiros anos são fundamentais para a formação de uma base sólida para o futuro. Por isso, nos empenhamos em proporcionar um ambiente onde cada criança possa florescer e se preparar para os próximos desafios com confiança e alegria.
                        <br>
                        Venha conhecer a nossa abordagem e descubra como podemos apoiar o desenvolvimento dos seus filhos desde os primeiros passos até o Infantil 4.
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- GALERIA SECTION --}}

    <section id="gallery" class="ftco-section ftco-gallery">
    	<div class="container-wrap">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                  <h2 class="mb-4"><span>Nosso</span> Espaço</h2>
                  <p>Conheça um pouco da nossa estrutura</p>
                </div>
            </div>

    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="{{ asset('assets') }}/images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('assets') }}/images/course-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{ asset('assets') }}/images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('assets') }}/images/image_2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{ asset('assets') }}/images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('assets') }}/images/image_3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{ asset('assets') }}/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('assets') }}/images/image_4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    {{-- SERVICE SECTION --}}



    <section id="services" class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Nossos</span> Serviços</h2>
                    <p>Estamos preparados para cuidar do seu filho do Berçario ao Infantil 4</p>
                </div>
            </div>
    		<div class="row">
        	<div class="col-md-6 col-lg-3 ftco-animate ">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Berçario</h3>
	        		</div>
	        		<div class="img" style="background-image: url({{ asset('assets') }}/images/bg_1.jpg);"></div>
	        		<div class="px-4">
	        			<p>Atendemos crianças a partir de 06 meses de vida</p>
        			</div>
        			<p class="button text-center"><a href="#contact" class="nav-animate btn btn-primary px-4 py-3">Consulte-nos</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Infantil 2</h3>
	        		</div>
	        		<div class="img" style="background-image: url({{ asset('assets') }}/images/bg_2.jpg);"></div>
        			<div class="px-4">
	        			<p>Texto para infantil 2</p>
        			</div>
        			<p class="button text-center"><a href="#contact" class="nav-animate btn btn-secondary px-4 py-3">Consulte-nos</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light active pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Infantil 3</h3>
	        		</div>
	        		<div class="img" style="background-image: url({{ asset('assets') }}/images/bg_3.jpg);"></div>
        			<div class="px-4">
	        			<p>Infantil 3</p>
        			</div>
        			<p class="button text-center"><a href="#contact" class="nav-animate btn btn-tertiary px-4 py-3">Consulte-nos</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Infantil 3</h3>
	        		</div>
	        		<div class="img" style="background-image: url({{ asset('assets') }}/images/bg_5.jpg);"></div>
        			<div class="px-4">
	        			<p>Infantil 4</p>
        			</div>
        			<p class="button text-center"><a href="#contact" class="nav-animate btn btn-quarternary px-4 py-3">Consulte-nos</a></p>
        		</div>
        	</div>
        </div>
    	</div>
    </section>


    {{-- CONTACT SECTION --}}

    <section id="contact" class="ftco-section contact-section" >
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">
                    <h2 class="mb-4"><span>Fale</span>Conosco</h2>
                    <p>Entre em contato, e retornaremos o mais breve possível</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">

                    <div class="ftco-footer-widget mb-5">
                        <div class="block-23 mb-3">
                          <h2 class="ftco-heading-2">Endereço</h2>
                          <ul>
                            <li><span class="icon icon-map-marker blue"></span>R. Cel. Francisco Ribas, 345 - Centro, Ponta Grossa - PR</li>
                            <li><span class="icon icon-phone blue"></span>(42) 3027-3565</li>
                            <li><span class="icon icon-envelope blue"></span>contato@educacaosemear.com.br</li>
                          </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <a class="" href="{{ asset('') }}">
                    <img src="{{ asset('assets') }}/images/logo-white.svg" alt="" class="logo-white" srcset="">
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Quer nos Conhecer?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">R. Cel. Francisco Ribas, 345 - Centro, Ponta Grossa - PR</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">(42) 3027-3565</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contato@educacaosemear.com.br</span></a></li>
                  </ul>
                </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#index"><span class="nav-animate ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#about"><span class="nav-animate ion-ios-arrow-round-forward mr-2"></span>Sobre Nós</a></li>
                <li><a href="#gallery"><span class="nav-animate ion-ios-arrow-round-forward mr-2"></span>Galeria</a></li>
                <li><a href="#services"><span class="nav-animate ion-ios-arrow-round-forward mr-2"></span>Serviços</a></li>
                <li><a href="#contact"><span class="nav-animate ion-ios-arrow-round-forward mr-2"></span>Contato</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Conecte Conosco</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
                Feito por <a href="https://wnascimento.com.br" target="_blank" class="p-2"><img src="{{ asset('assets') }}/img/w-logo.svg" width="25" height="auto" alt=""></a>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            </p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>


  <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('assets') }}/js/popper.min.js"></script>
  <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ asset('assets') }}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('assets') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('assets') }}/js/aos.js"></script>
  <script src="{{ asset('assets') }}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('assets') }}/js/scrollax.min.js"></script>
  <script src="{{ asset('assets') }}/js/main.js"></script>

  </body>
</html>
