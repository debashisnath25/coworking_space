
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
                    <h3>listing with sidebar</h3>
                    <ul class="banner-link text-center">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">listing</a>
                        </li>
                        <li>
                            <span class="active">listing with sidebar</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner ends-->

    <!-- listings start-->
    <div class="bg-w sp-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="action-list">
                        <div class="row">
                            <div class="col-md-3 col-6 mb-30">
                                <div class="sort-filter">
                                    <div class="sort-dropdown">
                                        <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown">
                                            Popularity
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">low to high</a>
                                            <a class="dropdown-item" href="#">hight to low</a>
                                            <a class="dropdown-item" href="#">relevance</a>
                                            <a class="dropdown-item" href="#">discount</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-6 mb-30">
                                <div class="view-mode justify-content-end d-flex">
                                    <div class="grid-view views current">
                                        <i class="fa fa-th"></i>
                                    </div>
                                    <div class="list-view views">
                                        <i class="fa fa-list-ul"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-grid-view show-list">
                        <div class="row">
                            <div class="col-md-6 col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-holder">
                                        <span class="offer">save 49%
                                        </span>
                                        <img src="img/pl-slide1.jpg" alt="list">
                                        <div class="rate-like centering justify-content-between">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <a class="likes" href="#">
                                                <i class="far fa-heart"></i>12
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-content p-2">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-cutlery mr-2"></i> restaurants</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">the lounge & bar</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-holder">
                                        <span class="offer">save 30%
                                        </span>
                                        <img src="img/pl-slide2.jpg" alt="list">
                                        <div class="rate-like centering justify-content-between">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <a class="likes" href="#">
                                                <i class="far fa-heart"></i>42
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-content p-2">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-shop mr-2"></i>shopping</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">the best shop in city</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-holder">
                                        <span class="offer">save 19%
                                        </span>
                                        <img src="img/pl-slide3.jpg" alt="list">
                                        <div class="rate-like centering justify-content-between">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <a class="likes" href="#">
                                                <i class="far fa-heart"></i>12
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-content p-2">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-cheers mr-2"></i>nightlife</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">enjoy best nightlife</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-holder">
                                        <span class="offer">save 59%
                                        </span>
                                        <img src="img/pl-slide4.jpg" alt="list">
                                        <div class="rate-like centering justify-content-between">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <a class="likes" href="#">
                                                <i class="far fa-heart"></i>14
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-content p-2">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-spa mr-2"></i>beauty & spa</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">best beauty & spa services</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-holder">
                                        <span class="offer">save 20%
                                        </span>
                                        <img src="img/pl-slide5.jpg" alt="list">
                                        <div class="rate-like centering justify-content-between">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a class="likes" href="#">
                                                <i class="far fa-heart"></i>16
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-content p-2">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-find mr-2"></i>desitination</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">best destinations in city</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-holder">
                                        <span class="offer">save 26%
                                        </span>
                                        <img src="img/pl-slide6.jpg" alt="list">
                                        <div class="rate-like centering justify-content-between">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <a class="likes" href="#">
                                                <i class="far fa-heart"></i>82
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-content p-2">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-hotel mr-2"></i>hotels</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">comfy hotels in town</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-30">
                                <a href="#" class="btn btn-one btn-anim">load more</a>
                            </div>
                        </div>
                    </div>
                    <div class="listing-list-view">
                        <div class="row">
                            <div class="col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-list">
                                        <div class="img-holder">
                                            <span class="offer">save 49%
                                            </span>
                                            <img src="img/pl-slide1.jpg" alt="list">
                                            <div class="rate-like centering justify-content-between">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <a class="likes" href="#">
                                                    <i class="far fa-heart"></i>25
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-cutlery mr-2"></i> restaurants</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">the lounge & bar</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-list">
                                        <div class="img-holder">
                                            <span class="offer">save 30%
                                            </span>
                                            <img src="img/pl-slide2.jpg" alt="list">
                                            <div class="rate-like centering justify-content-between">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <a class="likes" href="#">
                                                    <i class="far fa-heart"></i>33
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-shop mr-2"></i>shopping</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">the best shop in city</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-list">
                                        <div class="img-holder">
                                            <span class="offer">save 19%
                                            </span>
                                            <img src="img/pl-slide3.jpg" alt="list">
                                            <div class="rate-like centering justify-content-between">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <a class="likes" href="#">
                                                    <i class="far fa-heart"></i>55
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-cheers mr-2"></i>nightlife</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">enjoy best nightlife</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-list">
                                        <div class="img-holder">
                                            <span class="offer">save 59%
                                            </span>
                                            <img src="img/pl-slide4.jpg" alt="list">
                                            <div class="rate-like centering justify-content-between">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <a class="likes" href="#">
                                                    <i class="far fa-heart"></i>24
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-spa mr-2"></i>beauty & spa</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">best beauty & spa services</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-list">
                                        <div class="img-holder">
                                            <span class="offer">save 20%
                                            </span>
                                            <img src="img/pl-slide5.jpg" alt="list">
                                            <div class="rate-like centering justify-content-between">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a class="likes" href="#">
                                                    <i class="far fa-heart"></i>36
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-find mr-2"></i>desitination</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">best destinations in city</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-list">
                                        <div class="img-holder">
                                            <span class="offer">save 26%
                                            </span>
                                            <img src="img/pl-slide6.jpg" alt="list">
                                            <div class="rate-like centering justify-content-between">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <a class="likes" href="#">
                                                    <i class="far fa-heart"></i>84
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-hotel mr-2"></i>hotels</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> open now</span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">comfy hotels in town</a>
                                        </h5>
                                        <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-30">
                                <a href="#" class="btn btn-one btn-anim">load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <aside class="sidebar">
                        <h4 class="title-sep2 mb-30">search filters</h4>
                        <div class="widget-listing">
                            <div class="filter-box mb-30">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class="form-control" placeholder="What are you looking for?">
                                        </div>
                                        <div class="col-12">
                                            <div class="input-wrap">
                                                <i class="fa fa-crosshairs"></i>
                                                <input type="text" class="form-control" placeholder="location">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-wrap">
                                                <select class="form-control custom-select" id="service2">
                                                    <option>all categories</option>
                                                    <option>hotel</option>
                                                    <option>tour</option>
                                                    <option>pharmacy</option>
                                                    <option>shops</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-wrap">
                                                <i class="fas fa-dollar-sign"></i>
                                                <input type="text" class="form-control" placeholder="location">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="filter-checklist">
                                <div class="row">
                                    <div class="col-12 mb-60">
                                        <h5 class="mb-30">facilities</h5>
                                        <div class="row minus-pad">
                                            <div class="col-sm-6 col-12">
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
                                                    <label for="checkbox_id6">Card Payment</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id7" value="value">
                                                    <label for="checkbox_id7">Free Parking</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id8" value="value">
                                                    <label for="checkbox_id8">Free Wi-Fi</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id12" value="value">
                                                    <label for="checkbox_id12">Fitness Center</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id13" value="value">
                                                    <label for="checkbox_id13">Reservations</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id14" value="value">
                                                    <label for="checkbox_id14">Smoking Allowed</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id9" value="value">
                                                    <label for="checkbox_id9">Family Friendly</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id10" value="value">
                                                    <label for="checkbox_id10">Wheelchair</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id11" value="value">
                                                    <label for="checkbox_id11">Air Conditioning</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id15" value="value">
                                                    <label for="checkbox_id15">Swimming Pool</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id16" value="value">
                                                    <label for="checkbox_id16">Coupons</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id17" value="value">
                                                    <label for="checkbox_id17">Pet Friendly</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-60">
                                        <h5 class="mb-30">rating</h5>
                                        <div class="row minus-pad">
                                            <div class="col-sm-6 col-12">
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
                                                    <label for="checkbox_id1">Excellent 9+</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id2" value="value">
                                                    <label for="checkbox_id2">Superb 8+</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
                                                    <label for="checkbox_id3">Very good 7+</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
                                                    <label for="checkbox_id4">Good 6+</label>
                                                </div>
                                                <div class="w-100 mb-2">
                                                    <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
                                                    <label for="checkbox_id5">Pleasant 5+</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-30">distance radius :
                                        <span class="range-value">30</span>
                                        km
                                    </h5>
                                    <div class="input-wrap range-box">
                                        <div class="range-slider">
                                            <input type="range" min="1" max="100" value="30" class="range-track" id="myRange">
                                            <div class="fill" style="width:30%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-one btn-anim w-100">
                                        update</button>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- listings end -->

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
   <!-- footer end -->

</body>

</html>