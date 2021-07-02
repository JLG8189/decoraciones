
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
      <title>Decoraciones Artisticas My Aniversario</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="/"><img src="{{ asset('images/logos.png') }}"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio</a>
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
      <!-- about section start -->
      <!--div class="container">
      <div class="about_taital">Agregar Pedido</div>
      </div-->
      <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text">Agregar Pedido</h1>
         </div>
      </div>
      
      @yield('content')
      
    
      <!-- about section end -->
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
                        <li><a href="/">Inicio</a></li>
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
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>     
   </body>
</html>