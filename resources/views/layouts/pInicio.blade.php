
<!DOCTYPE html>
<html lang="es">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Decoraciones My Aniversario</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href=""><img src="images/logos.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="">Inicio</a>
                     </li>
                     <!--li class="nav-item">
                        <a class="nav-link" href="#">Galería</a>
                     </li-->
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('pedido.create') }}">Comprar</a>
                     </li>
                     @auth
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('pedido.index') }}">Pedidos</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('archivo.index') }}">Archivos</a>
                     </li>
                     @endauth
                     <li class="nav-item">
                        <div class="send_btn">
                        </div>
                     </li>
                     @guest
                     <ul>
                        <li>
                           <a href=" {{route('login') }}">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10" style="color:white">Log In</span>
                           </a>
                        </li>
                        <li>
                            <a href=" {{route('register') }}">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10" style="color:white">Registrarse</span>
                           </a>
                        </li>
                    </ul>
                    @endguest
                     @auth
                    <ul>
                        <br>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a
                                    href="#"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                >
                                    <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10" style="color:white">Salir</span>
                            
                                </a>
                            </form>
                        </li>
                        <!--li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10" style="color:white">Log Out</span>
                           </a>
                        </li-->
                     </ul>
                    @endauth
                     <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Decoraciones</h1>
                              <h1 class="coffee_text">My Aniversario</h1>
                              <p class="there_text">Decoraciones para bautizos, fiestas de XV años, bodas y más.</p>
                              <div class="learnmore_bt"><a href="">Ver Más</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital">Información</div>
                     <p class="about_text">Decoraciones para bautizos, fiestas de XV años, bodas y más.</p>
                     <p class="about_text"></p>
                     <div class="read_bt"><a href="#">Leer más</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="{{ asset('images/about-img1.png') }}"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="gallery_taital">Galería</h1>
                  <p class="gallery_text">Nuestros productos</p>
               </div>
            </div>
            <div class="">
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('images/img-11.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('images/img-12.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('images/img-13.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('images/img-14.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('images/img-15.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('images/img-16.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('images/img-17.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('images/img-18.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('images/img-19.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="seemore_bt"><a href="#">Ver más</a></div>
         </div>
      </div>
      <!-- gallery section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Servicios</h1>
                  <p class="services_text">Decoraciones para fiestas, bodas, bautizo XV años etc.</p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                           <img src="{{ asset('images/icon11.png') }}" class="image_1">
                           <img src="{{ asset('images/icon11.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Bodas</h3>
                        <p class="tation_text">Decoraciones para bodas.</p>
                        <div class="readmore_bt"><a href="#">Ver más</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="{{ asset('images/icon12.png') }}" class="image_1">
                           <img src="{{ asset('images/icon12.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Bautizos</h3>
                        <p class="tation_text">Decoraciones para bautizos</p>
                        <div class="readmore_bt"><a href="#">Ver más</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="{{ asset('images/icon13.png') }}" class="image_1">
                           <img src="{{ asset('images/icon13.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">XV años</h3>
                        <p class="tation_text">Decoraciones para XV años</p>
                        <div class="readmore_bt"><a href="#">Ver más</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- testimonial section start -->
      
      <!-- testimonial section end -->
      <!-- contact section start -->
      
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Información</h3>
                  <p class="footer_text">Decoraciones para bautizos, fiestas de XV años, bodas y más.</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Menú</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="{{ route('pedido.create') }}">Comprar</a></li>
                        @auth 
                        <li><a href="{{ route('pedido.index') }}">Pedidos</a></li>
                        <li><a href="{{ route('archivo.index') }}">Archivos</a></li>
                        @endauth
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Useful Link</h1>
                  <p class="dummy_text">Adipiscing Elit, sed do Eiusmod Tempor incididunt </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Contacto</h1>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address : Loram Ipusm</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : +01 1234567890</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : demo@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>     
   </body>
</html>