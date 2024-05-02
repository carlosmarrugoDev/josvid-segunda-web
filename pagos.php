<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cursos | Educación</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
  <link rel="stylesheet" href="assets/css/gijgo.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/animated-headline.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>



  <!-- Preloader Start -->
  <!-- Header Start -->
  <div class="header-area header-transparent">
    <div class="main-header ">
      <div class="header-bottom  header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-xl-2 col-lg-2">
              <div class="logo">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10">
              <div class="menu-wrapper d-flex align-items-center justify-content-end">
                <!-- Main-menu -->
                <div class="main-menu d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                      <li class="active"><a href="index.html">Home</a></li>
                      <li><a href="courses.html">Cursos</a></li>
                      <li><a href="about.html">Acerca</a></li>
                      <li><a href="#">Blog</a>
                        <ul class="submenu">
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="blog_details.html">Detalle del blog</a></li>
                          <li><a href="elements.html">Elementos</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.html">Contactanos</a></li>
                      <li><a href="pagos.html"><img src="images/icons.png"></a></li>
                      <!-- Button -->
                      <li class="button-header margin-left "><a href="register.html" class="btn">únete</a></li>
                      <li class="button-header"><a href="login.html" class="btn btn3">Iniciar sesión</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->
  <main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
      <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height2">
          <div class="container">
            <div class="row">
              <div class="col-xl-8 col-lg-11 col-md-12">
                <div class="hero__caption hero__caption2">
                  <h1 data-animation="bounceIn" data-delay="0.2s">Carrito de compras</h1>
                  <!-- breadcrumb Start-->
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Servicios</a></li>
                    </ol>
                  </nav>
                  <!-- breadcrumb End -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Courses area start -->


    <!-- Start Hero Section -->
    <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="intro-excerpt">
              <br>
              <h1>Pagos</h1>
            </div>
          </div>
          <div class="col-lg-7">

          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->



    <div class="untree_co-section before-footer-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $connection_obj = mysqli_connect("localhost", "root", "", "test");

                  if (!$connection_obj) {
                    echo "Error No: " . mysqli_connect_errno();
                    echo "Error Description: " . mysqli_connect_error();
                    exit;
                  }
                  // prepare the select query 
                  $query = "SELECT * FROM usertem";
                  // execute the select query 
                  $result = mysqli_query($connection_obj, $query) or die(mysqli_error($connection_obj));
                  // run the select query 
                  while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                    echo '<tr>
                              <td class="product-thumbnail">
                                <img src= "' . $row['URLCouse'] . '" alt="Image" class="img-fluid" width="20%">
                              </td>
                              <td class="product-name">
                                <h2 class="h5 text-black">' . $row['courseName'] . '</h2>
                              </td>
                              <td>' . $row['price'] . '</td>
                              <td>$49.00</td>
                              <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                            </tr>';
                  }
                  ?>


                </tbody>
              </table>
            </div>
          </form>
        </div>  

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-black btn-sm btn-block">Actualización de compra</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-black btn-sm btn-block">Continuar comprando</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Cupón</label>
                <p>Inserta el codigo de descuento, si tienes uno</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-black">Aplicar cupón</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Totales del carrito</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='cheackout.html'">Pasar por la caja</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Start Footer Section -->
    <footer class="footer-section">
      <div class="container relative">

        <div class="sofa-img">
          <img src="images/JAVA 0 INTRO 1.png" alt="Image" class="img-fluid">
        </div>

        <div class="row">
          <div class="col-lg-8">
            <div class="subscription-form">
              <h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Suscríbete al boletín</span></h3>

              <form action="#" class="row g-3">
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Enter your name">
                </div>
                <div class="col-auto">
                  <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="col-auto">
                  <button class="btn btn-primary">
                    <span class="fa fa-paper-plane"></span>
                  </button>
                </div>
              </form>

            </div>
          </div>
        </div>

        <div class="row g-5 mb-5">
          <div class="col-lg-4">
            <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo"><span></span></a></div>
            <p class="mb-4">Comprando...</p>

            <ul class="list-unstyled custom-social">
              <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
              <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
              <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
            </ul>
          </div>
        </div>

        <div class="border-top copyright">
          <div class="row pt-4">
            <div class="col-lg-6">
              <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
              </p>
            </div>

            <div class="col-lg-6 text-center text-lg-end">
              <ul class="list-unstyled d-inline-flex ms-auto">
                <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>

          </div>
        </div>

      </div>
    </footer>
    <!-- End Footer Section -->


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>