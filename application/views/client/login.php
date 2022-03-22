<html lang="en">
    <head>
        <title>Expert System Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>fonts/icomoon/style.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/jquery-ui.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/aos.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/style.css">


    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
              <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                  <span class="icon-close2 js-menu-toggle"></span>
                </div>
              </div>
              <div class="site-mobile-menu-body"></div>
            </div>



            <header class="site-navbar py-2 bg-white js-sticky-header site-navbar-target" role="banner">

              <div class="container">
                <div class="row align-items-center">
                  <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="<?= base_url('auth')?>" class="text-black mb-0">HealthMe<span class="text-primary">.</span> </a></h1>
                  </div>
                  <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                      <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="<?= base_url('login') ?>" class="nav-link active">Masuk</a></li>
                            <li><a href="<?= base_url('daftar') ?>" class="nav-link">Daftar</a></li>
                      </ul>
                    </nav>
                  </div>

                  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

                </div>
              </div>

            </header>

            <div class="site-section bg-light" id="login">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                          <h3 class="section-sub-title">Login</h3>
                            <h2 class="section-title mt-4 mb-3">Masuk</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7 mb-2">

                           <?= $this->session->flashdata('message');?>

                            <form action="<?= base_url('login/doLogin');?>" method="post" class="p-5 bg-white">

                                <h2 class="h4 text-black mb-5">Masukan Username dan Password Anda.</h2>

                               <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="username">Username</label>
                                        <input type="text" id="email" name="username" class="form-control rounded-0">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="password">Password</label>
                                        <input type="password" id="email" name="password" class="form-control rounded-0">
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" value="Log In" class="btn btn-black rounded-0 py-3 px-4">
                                        <a class="ml-4" href="<?= base_url('daftar');?>">Belum memiliki akun? Registrasi Sekarang!</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- .site-wrap -->

        <script src="<?= base_url('assets/frontend/');?>js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery-migrate-3.0.1.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery-ui.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/popper.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.stellar.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.countdown.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.easing.1.3.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/aos.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.fancybox.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.sticky.js"></script>


        <script src="<?= base_url('assets/frontend/');?>js/main.js"></script>

    </body>
</html>
