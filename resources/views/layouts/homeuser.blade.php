<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Tienda "KIOS"</title>
  <!-- Iconos de Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap -->
  <link href="{{asset('homeuser/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- MDB -->
  <link href="{{asset('homeuser/css/mdb.min.css')}}" rel="stylesheet">
  <!-- CSS propio -->
  <link href="{{asset('homeuser/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="/">
        <strong class="deep-orange-text">KIOS</strong>
      </a>
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="/">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#" target="_blank">¿Quienes somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#"
              target="_blank">Preguntas frecuentes</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect">
              <span class="badge red z-depth-1 mr-1"> No Disponible </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Carrito </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('login')}}" class="nav-link border border-light rounded waves-effect">
              <i class="fas fa-sign-in-alt"></i>Iniciar sesión
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!--Carousel Wrapper-->
  <div id="caoruselkios" class="carousel slide carousel-fade pt-4" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#caoruselkios" data-slide-to="0" class="active"></li>
      <li data-target="#caoruselkios" data-slide-to="1"></li>
      <li data-target="#caoruselkios" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('homeuser/img/carousel/homeuser1.jpeg'); background-repeat: no-repeat; background-size: cover;">
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>¡Registrate es gratis!</strong>
              </h1>
              <p>
                <strong>Es facil, seguro y rápido</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>La tienda al alcance de todos, disfruta de la experiencia de compras en linea sin preocupaciones, ingresa en la plataforma para acceder a los servicios que mejoraran su experiencia de compra al maximo</strong>
              </p>

              <a href="{{route('register')}}" class="btn btn-outline-white btn-lg">REGISTRARSE
                <i class="far fa-user-circle ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('homeuser/img/carousel/homeuser2.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Ayudanos a mejorar</strong>
              </h1>

              <p>
                <strong>Para participar de los sorteos solo hace falta realizar una compra</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Responde las encuestas sobre la experiencia de la plataforma por internet brindada por nuestra tienda "KIOS" y gana sorteos por descuentos en todo tipo de productos.</strong>
              </p>

              <a href="{{route('register')}}" class="btn btn-outline-white btn-lg">REGISTRARSE
                <i class="far fa-user-circle ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->
        </div>
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('homeuser/img/carousel/homeuser3.jpg'); background-repeat: no-repeat; background-size: cover;">
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Disfruta de nuestras ofertas</strong>
              </h1>
              <p>
                <strong>Las ofertas son sorprendentes</strong>
              </p>
              <p class="mb-4 d-none d-md-block">
                <strong>Una vez concluido el registro usted podra acceder a diferentes ofertas en cualquier momento del año. Esperamos que la experiencia en su estadia sea la mejor.</strong>
              </p>
              <a href="{{route('register')}}" class="btn btn-outline-white btn-lg">REGISTRARSE
                <i class="far fa-user-circle ml-2"></i>
              </a>
            </div>
            <!-- Content -->
          </div>
          <!-- Mask & flexbox options-->
        </div>
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#caoruselkios" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#caoruselkios" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">Mayor venta:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navproductos"
          aria-controls="navproductos" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navproductos">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Todos
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Snacks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bebidas gaseosas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Masitas</a>
            </li>
          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->
      </nav>
      <!--/.Navbar-->
      <!--Section: Products v.3-->
      <section class="text-center mb-4">
        <!--Grid row-->
        <div class="row wow fadeIn">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
            <!--Card-->
            <div class="card">
              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Shirt</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Denim shirt
                      <span class="badge badge-pill danger-color">NEW</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>120$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Sport wear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Sweatshirt</a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>139$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Sport wear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Grey blouse
                      <span class="badge badge-pill primary-color">bestseller</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>99$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Fourth column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Outwear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Black jacket</a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>219$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Fourth column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Shirt</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Denim shirt
                      <span class="badge badge-pill danger-color">NEW</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>120$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Sport wear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Sweatshirt</a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>139$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Sport wear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Grey blouse
                      <span class="badge badge-pill primary-color">bestseller</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>99$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Fourth column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Outwear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Black jacket</a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>219$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Fourth column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">5</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--Pagination-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <!--Call to action-->
    <div class="pt-4">
    	<p>Version 1.0.6</p>
    </div>
    <!--/.Call to action-->
	<div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://www.unifranz.edu.bo/" target="_blank"> UNIFRANZ </a>
    </div>
  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('homeuser/js/jquery-3.4.0.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('homeuser/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('homeuser/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('homeuser/js/mdb.min.js')}}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>
</html>

