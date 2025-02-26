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
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css">

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

                <!-- Redes sociais dentro do colapso -->
                <div class="social-links-wrapper">
                    <ul class="navbar-nav social-links">
                        <li class="ftco-animate icons-top nav-link d-flex">
                            <a href="https://web.facebook.com/educacaosemear"><span class="icon-facebook"></span></a>
                            <a href="https://www.youtube.com/@CEISemear"><span class="icon-youtube"></span></a>
                            <a href="https://www.instagram.com/ceisemear"><span class="icon-instagram"></span></a>
                        </li>
                    </ul>
                </div>
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
            <h1 class="mb-4">Semeando sonhos, <span>Colhendo conquistas.</span></h1>
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
            <h1 class="mb-4">Aqui, cada criança é uma semente pronta para <span>FLORESCER.</span></h1>
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
                  <p>EDUCAR é SEMEAR</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-2">Quem Somos?</h2>
                    <p class="text-justify">
                        Bem-vindo(a) à Educação Semear!
                        <br><br>
                            <span class="pl-5">
                                Nutrir o potencial de cada criança desde os primeiros dias de vida é garantir uma vida próspera. Aqui, proporcionamos um ambiente acolhedor e rico, do berçário ao Infantil 4, com foco no desenvolvimento integral em cada fase da infância.
                            </span>
                            <br>
                            <span class="pl-5">
                                Cada criança é única e se desenvolve no seu próprio ritmo. É sabendo disso que aqui na Educação Semear  criamos programas de maneira cuidadosa, planejados para atender cada faixa etária, estimulando o crescimento cognitivo, emocional e social, por meio de atividades lúdicas, e interativas.
                            </span>
                            <br>
                            <span class="pl-5">
                                Nossa equipe é formada por profissionais experientes e dedicados, que focam em tornar o aprendizado um processo, leve, divertido e significativo, onde as crianças exploram o mundo, descobrem o que há nele e aprendem tudo da melhor maneira.
                            </span>
                            <br>
                            <span class="pl-5">
                                Sabemos que os primeiros anos são essenciais para a construção de uma base sólida para o futuro. Por isso, criamos este ambiente: um local onde toda criança floresce, ganha confiança e se prepara para novos desafios com entusiasmo, em sua forma e tempo..
                            </span>
                            <br>
                            <span class="pl-5">
                                Venha conhecer nossa abordagem e descubra como podemos apoiar o desenvolvimento de seu filho desde os primeiros passos!
                            </span>
                        <br>
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
                  <p>Onde toda semente floresce</p>
                </div>
            </div>

    		<div class="row no-gutters">
                    @foreach ($data['photos'] as $item)
                        <div class="col-md-3 ftco-animate">
                            <a href="{{ asset('storage').'/'.$item->url }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('storage').'/'.$item->url }});">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                    @endforeach
		    </div>
    	</div>
    </section>

    {{-- SERVICE SECTION --}}



    <section id="services" class="p-0 ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>A CRIANÇA EM DESENVOLVIMENTO</span> CONSTANTE</h2>
                    <p>
                        Um mundo repleto de descobertas a aguarda!
                    </p>
                </div>
            </div>
    		<div class="row d-flex justify-space-between">
                <div class="col-md-4 col-lg-3 ftco-animate d-flex">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Berçario</h3>
                        </div>
                        <div class="img" style="background-image: url({{ asset('assets') }}/images/bg_1.jpg);"></div>
                        <div class="px-4">
                            <p>Cuidado, carinho e estímulos desde os primeiros meses.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate d-flex">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Infantil 1</h3>
                        </div>
                        <div class="img" style="background-image: url({{ asset('assets') }}/images/bg_2.jpg);"></div>
                        <div class="px-4">
                            <p>Primeiras descobertas em um mundo enorme!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate d-flex">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Infantil 2</h3>
                        </div>
                        <div class="img" style="background-image: url({{ asset('assets') }}/images/bg_2.jpg);"></div>
                        <div class="px-4">
                            <p>Explorando e se desenvolvendo de pouco em pouco!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 ftco-animate d-flex">
                    <div class="pricing-entry bg-light active pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Infantil 3</h3>
                        </div>
                        <div class="img" style="background-image: url({{ asset('assets') }}/images/bg_3.jpg);"></div>
                        <div class="px-4">
                            <p>Curiosidade, criatividade e educação florescendo cada vez mais!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Infantil 4</h3>
                        </div>
                        <div class="img" style="background-image: url({{ asset('assets') }}/images/bg_5.jpg);"></div>
                        <div class="px-4">
                            <p>A preparação para novos desafios com autonomia e confiança.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center heading-section ftco-animate">
                <h5 class="mb-4 py-4">GARANTA O FUTURO QUE SUA CRIANÇA MERECE.</h5>
                <a href="#contact" class="nav-animate btn btn-secondary px-4 py-3 mt-3">Contate-nos</a>
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
                    <form id="contactForm" >
                        @csrf
                        <div class="form-group">
                            <input type="text" id="name" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" class="form-control" placeholder="Assunto">
                        </div>
                        <div class="form-group">
                            <textarea id="message" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar Mensagem" class="btn btn-primary py-3 px-5">
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
                <li class="ftco-animate"><a href="https://web.facebook.com/educacaosemear"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.youtube.com/@CEISemear"><span class="icon-youtube"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/ceisemear"><span class="icon-instagram"></span></a></li>
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

    <a href="https://api.whatsapp.com/send?phone=550425504230273565&text=Olá!%20Esta%20é%20uma%20mensagem%20e%20vinda%20do%20site." class="float-whats" target="_blank" onclick="goog_report_conversion('https://api.whatsapp.com/send?phone=5504230273565&text=Olá!%20Esta%20é%20uma%20mensagem%20do%20site.')">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI1MTIiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOmNjPSJodHRwOi8vY3JlYXRpdmVjb21tb25zLm9yZy9ucyMiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6aW5rc2NhcGU9Imh0dHA6Ly93d3cuaW5rc2NhcGUub3JnL25hbWVzcGFjZXMvaW5rc2NhcGUiIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyIgeG1sbnM6c29kaXBvZGk9Imh0dHA6Ly9zb2RpcG9kaS5zb3VyY2Vmb3JnZS5uZXQvRFREL3NvZGlwb2RpLTAuZHRkIiB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcyBpZD0iZGVmczEyIi8+PGcgaWQ9Imc1MTI0Ij48cmVjdCBoZWlnaHQ9IjUxMiIgaWQ9InJlY3QyOTg3IiByeD0iNjQiIHJ5PSI2NCIgc3R5bGU9ImZpbGw6IzY1YmM1NDtmaWxsLW9wYWNpdHk6MTtmaWxsLXJ1bGU6bm9uemVybztzdHJva2U6bm9uZSIgd2lkdGg9IjUxMiIgeD0iMCIgeT0iMCIvPjxwYXRoIGQ9Im0gNDU2LDI1MC44NTI2NiBjIDAsMTA3LjYwOTA0IC04Ny45MTI2LDE5NC44NDQyIC0xOTYuMzYzOTcsMTk0Ljg0NDIgLTM0LjQzMDY2LDAgLTY2Ljc3Njc3LC04LjgwMTY4IC05NC45MTk5LC0yNC4yNDE2MiBMIDU2LjAwMDAwNSw0NTYgOTEuNDM3NzQ1LDM1MS40NTU4NCBDIDczLjU1OTcxNSwzMjIuMDg4NzIgNjMuMjY1MDI1LDI4Ny42NTUyMyA2My4yNjUwMjUsMjUwLjg1MTI0IDYzLjI2NTAyNSwxNDMuMjM1MTYgMTUxLjE4MDQ5LDU2IDI1OS42MzQ2Myw1NiAzNjguMDg3NCw1Ni4wMDEgNDU2LDE0My4yMzY1NyA0NTYsMjUwLjg1MjY2IHogTSAyNTkuNjM2MDMsODcuMDMxOTYgYyAtOTEuMDQwOTIsMCAtMTY1LjA5Mzk2NSw3My40OTI0OCAtMTY1LjA5Mzk2NSwxNjMuODIwNyAwLDM1Ljg0MDU2IDExLjY4MzQ2NSw2OS4wNDE2MiAzMS40NDYwNTUsOTYuMDQ1MjkgbCAtMjAuNjIxNzcsNjAuODMxNTEgNjMuNDQyODUsLTIwLjE2NDAzIGMgMjYuMDcxMjYsMTcuMTEzMjMgNTcuMjkxOTYsMjcuMDk4MDUgOTAuODI1NDMsMjcuMDk4MDUgOTEuMDI5NjUsMCAxNjUuMDkzOTYsLTczLjQ4NTQzIDE2NS4wOTM5NiwtMTYzLjgxMjI0IDAsLTkwLjMyNjggLTc0LjA2MjkyLC0xNjMuODE5MjggLTE2NS4wOTI1NiwtMTYzLjgxOTI4IHogbSA5OS4xNTUyNiwyMDguNjg5NzIgYyAtMS4yMDk4OSwtMS45ODg3OSAtNC40MTg1LC0zLjE4NjAyIC05LjIyNDI0LC01LjU3MDYgLTQuODE3MDUsLTIuMzg3NCAtMjguNDg5NjQsLTEzLjk0NTUxIC0zMi44OTQsLTE1LjUzNDI5IC00LjQxODQ1LC0xLjU5MzAxIC03LjYzMTIyLC0yLjM5MzA0IC0xMC44MzgzOCwyLjM4NDU4IC0zLjIwNDMyLDQuNzkwMjggLTEyLjQyODU2LDE1LjUzNDI5IC0xNS4yNDI3MywxOC43MjAzMSAtMi44MDg1MywzLjE5MTY2IC01LjYwODYzLDMuNTkwMjYgLTEwLjQyNTY5LDEuMjAwMDMgLTQuODA1NzgsLTIuMzg3MzkgLTIwLjMyMTc3LC03LjQyODQgLTM4LjcwODI2LC0yMy43MDIxNSAtMTQuMzA3NDksLTEyLjY1ODE1IC0yMy45Njk3OCwtMjguMjg1NCAtMjYuNzc4MzEsLTMzLjA3MTQ3IC0yLjgwODU0LC00Ljc3OTAzIC0wLjI5NzIsLTcuMzYyMiAyLjEwOTkzLC05LjczOTc1IDIuMTY2MjYsLTIuMTQ3OTYgNC44MTQyMywtNS41ODE4NiA3LjIyNDE2LC04LjM2MzY0IDIuNDA3MTIsLTIuNzk0NDcgMy4yMDcxNSwtNC43ODE4NCA0LjgwODYxLC03Ljk2OTI2IDEuNjEyNzIsLTMuMTg4ODQgMC44MDAwMiwtNS45NzQ4NSAtMC4zOTg2LC04LjM3MDcgLTEuMjAyODYsLTIuMzgzMTcgLTEwLjgzMjc0LC0yNS44ODk1NSAtMTQuODQ0MTUsLTM1LjQ0OSAtNC4wMTEzOCwtOS41NTk0NyAtOC4wMTE1LC03Ljk2NjQ2IC0xMC44MjU2OCwtNy45NjY0NiAtMi44MDk5NiwwIC02LjAxNTY5LC0wLjQwMDAyIC05LjIyOTg3LC0wLjQwMDAyIC0zLjIwOTk3LDAgLTguNDI3MDMsMS4xOTg2NCAtMTIuODM1NjIsNS45NzM0NCAtNC40MTAwMSw0Ljc4MzI1IC0xNi44NDEzOCwxNi4zMzI5MSAtMTYuODQxMzgsMzkuODMzNjUgMCwyMy41MDQ5NyAxNy4yNDI3OSw0Ni4yMTEzMyAxOS42NTI3Myw0OS4zOTU5NCAyLjQwNDMxLDMuMTc3NTYgMzMuMjg4MzgsNTIuOTcyMSA4Mi4yMTgxMSw3Mi4xMDIyOCA0OC45NDgwMiwxOS4xMTMyOCA0OC45NDgwMiwxMi43NDQwNyA1Ny43NzM2NSwxMS45MzcgOC44MTQzNywtMC43ODczNSAyOC40Njk5MiwtMTEuNTQ0MDMgMzIuNDg4MzIsLTIyLjcwMDcyIDQuMDA4NiwtMTEuMTQ5NjQgNC4wMDg2LC0yMC43MTg5NiAyLjgxMTQsLTIyLjcwOTE3IHoiIGlkPSJXaGF0c0FwcF8yXyIgc3R5bGU9ImZpbGw6I2ZmZmZmZjtmaWxsLXJ1bGU6ZXZlbm9kZCIvPjwvZz48cGF0aCBkPSJtIDE4LjY5NTc0LDQ5My4yODc1MSBjIDExLjU2Nzk4LDExLjU2NzkgMjcuNTc2MDYsMTguNzEyNSA0NS4zMDQwNCwxOC43MTI1IGwgMzg0LjAxMjU1LC0wLjAyOSBjIDM1LjQ1NiwwIDYzLjk4NzcsLTI4LjUzMTYgNjMuOTg3NywtNjMuOTg3NTkgbCAwLC0zODMuOTgzNjg1IGMgMCwtMTcuNzI3OTggLTcuMTQ0NiwtMzMuNzM2MDMgLTE4LjcxMjYsLTQ1LjMwNDAzIEwgMTguNjk1NzQsNDkzLjI4NzUxIHoiIGlkPSJyZWN0Mjk4NC0xIiBzdHlsZT0iZmlsbDojMDAwMDAwO2ZpbGwtb3BhY2l0eTowLjMwMTk2MDc4O2ZpbGwtcnVsZTpub256ZXJvO3N0cm9rZTpub25lIi8+PC9zdmc+" alt="" width="50px">
    </a>

    <style>
        .float-whats{right: 25px; position:fixed; width:50px;  height:50px; bottom:25px; text-align:center; z-index:100;}
    </style>


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
  <script src="{{ asset('assets') }}/js/contact.js"></script>

  </body>
</html>
