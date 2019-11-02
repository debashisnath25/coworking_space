
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <?php include 'metalinks.php';?>

</head>

<body>

    <!-- ====== Go to top ====== -->
    <a id="toTop" title="Go to top" href="javascript:void(0)">
        <span id="toTopHover"></span>TOP
    </a>

    <!-- Preloader start-->
    <div class="preloader">
        <div class="loader-inner">
            <div class="dash one">
                <i class="fa fa-map-marker-alt"></i>
            </div>
            <div class="dash two">
                <i class="fa fa-map-marker-alt"></i>
            </div>
            <div class="dash three">
                <i class="fa fa-map-marker-alt"></i>
            </div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Header start-->
    <?php include 'header.php';?>
    <!-- Header end -->

    <!-- Search Form -->
    <div id="search" class="top-search d-flex">
        <span class="close">
            <i class="fa fa-times"></i>
        </span>
        <div class="w-100 text-center mt-4">
            <h3 class="c-white fw-5">search here</h3>
            <form role="search" id="searchform" action="#" method="get" class="search-bar">
                <input value="" name="q" type="search" placeholder="type to search..." class="form-control">
                <button type="submit" class="submit-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- page-banner start-->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>login / register</h3>
                    <ul class="banner-link text-center">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">pages</a>
                        </li>
                        <li>
                            <span class="active">login / register</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner ends-->

    <!-- login start-->
    <div class="login-section bg-w sp-100">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <ul class="nav d-flex log-tab mb-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#login" role="tab" data-toggle="tab">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#register" role="tab" data-toggle="tab">register</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="login">
                            <form class="custom-form" id="loginform" method="post" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text" id="name1" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control" placeholder="Password" id="email">
                                    </div>
                                    <div class="col-6">
                                        <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
                                        <label for="checkbox_id1">remember me</label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="paswd"> forgot password ?</a>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                                            login</button>
                                    </div>
                                </div>
                                <div class="seprator mt-4 mb-3">
                                    <span>or</span>
                                </div>
                                <div class="signin-socials">
                                    <p class="text-capitalize mb-0">sign in with...</p>
                                    <div class="row">
                                        <div class="col-sm-4 col-12 mt-4">
                                            <a href="#" class="btn btn-anim fb w-100">
                                                <i class="fab fa-facebook-f"></i>
                                                facebook</a>
                                        </div>
                                        <div class="col-sm-4 col-12 mt-4">
                                            <a href="#" class="btn btn-anim twitter w-100">
                                                <i class="fab fa-twitter"></i>
                                                twitter</a>
                                        </div>
                                        <div class="col-sm-4 col-12 mt-4">
                                            <a href="#" class="btn btn-anim google w-100">
                                                <i class="fab fa-google-plus-g"></i>
                                                google</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="register">
                            <form class="custom-form" id="registerform" method="post" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text" id="name2" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-envelope"></span>
                                        <input type="email" class="form-control" placeholder="Enter Email" id="email2">
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control" placeholder="Password" id="password">
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control" placeholder="Confirm Password" id="c-password">
                                    </div>
                                    <div class="col-6">
                                        <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                                        <label for="checkbox_id">remember me</label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="paswd"> forgot password ?</a>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-one btn-anim w-100" id="submit" name="submit">
                                            register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login end -->

    <!-- cta-one start-->
    <section class="cta-one tri-bg-w text-lg-left text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 my-lg-0 my-5 py-lg-0 py-5">
                    <div class="cta-content">
                        <h3>Sign Up To Get Special Offers Every Day</h3>
                        <p>Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. Aenean socada commodo ligaui
                            egets dolor. </p>
                        <a href="login.html" class="btn btn-two btn-anim mt-2">
                            sign up
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="cta-img mt-4">
                        <img src="img/cta-bg.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-one end -->

    <!-- footer starts -->
    <?php include 'footer.php';?>


</body>

</html>