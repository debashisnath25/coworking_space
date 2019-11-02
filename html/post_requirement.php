
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php include 'metalinks.php';?>

</head>

<body>
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
                    <h3>add listing</h3>
                    <ul class="banner-link text-center">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">listing</a>
                        </li>
                        <li>
                            <span class="active">add listing</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner ends-->

    <!-- add-list start-->
    <section class="bg-w sp-100">
        <div class="container">
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        basic info
                    </h4>
                </div>
                <div class="col-12">
                    <form class="listing-form" action="#">
                        <div class="row">
                            <div class="col-12">
                                <label>listing title</label>
                                <input type="text" id="name" class="form-control" placeholder="type here">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>category</label>
                                <select class="form-control custom-select" id="categories">
                                    <option>select categories</option>
                                    <option>hotel</option>
                                    <option>tour</option>
                                    <option>pharmacy</option>
                                    <option>shops</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>keywords</label>
                                <input type="text" id="keywords" class="form-control" placeholder="Keywords Here">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        location
                    </h4>
                </div>
                <div class="col-12">
                    <form class="listing-form" action="#">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <label>city</label>
                                <select class="form-control custom-select" id="categories2">
                                    <option>select city</option>
                                    <option>hotel</option>
                                    <option>tour</option>
                                    <option>pharmacy</option>
                                    <option>shops</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>address</label>
                                <input type="text" id="adress" class="form-control" placeholder="address here">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>state</label>
                                <input type="text" id="state" class="form-control" placeholder="enter Here">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>zip code</label>
                                <input type="text" id="code" class="form-control" placeholder="enter Here">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <div class="map mb-30">
                        <div id="theme-map"></div>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        details
                    </h4>
                </div>
                <div class="col-12">
                    <form class="listing-form" action="#">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <label>city</label>
                                <textarea rows="10" name="comment" class="form-control" placeholder="write here" id="comment"></textarea>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label>phone</label>
                                        <input type="text" id="phn" class="form-control" placeholder="phone no">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label>facebook</label>
                                        <input type="text" id="fb" class="form-control" placeholder="facebook">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label>e mail</label>
                                        <input type="text" id="mail" class="form-control" placeholder="e mail">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label>google +</label>
                                        <input type="text" id="google" class="form-control" placeholder="google +">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label>website</label>
                                        <input type="text" id="website" class="form-control" placeholder="website">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label>twitter</label>
                                        <input type="text" id="twitter" class="form-control" placeholder="twitter">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        facilities
                    </h4>
                </div>
                <div class="col-12">
                    <form class="listing-form minus-pad" action="#">
                        <div class="row mb-30">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
                                <label for="checkbox_id1">Card Payment</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id2" value="value">
                                <label for="checkbox_id2">Family Friendly</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
                                <label for="checkbox_id3">Fitness Center</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
                                <label for="checkbox_id4">Swimming Pool</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
                                <label for="checkbox_id5">Free Wi-Fi</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
                                <label for="checkbox_id6">Free Parking</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id7" value="value">
                                <label for="checkbox_id7">Air Conditioning</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id8" value="value">
                                <label for="checkbox_id8">Wheelchair</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id9" value="value">
                                <label for="checkbox_id9">Reservations</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id10" value="value">
                                <label for="checkbox_id10">Coupons</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id11" value="value">
                                <label for="checkbox_id11">Smoking Allowed</label>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id12" value="value">
                                <label for="checkbox_id12">Pet Friendly</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12 mb-60">
                    <h4 class="title-sep3 mb-30">
                        gallery
                    </h4>
                    <div class="drop-file">
                        <a href="#" class="w-100">
                            <i class="far fa-plus-square"></i>
                            <p class="mb-0">Drop files here to upload</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-60">
                    <h4 class="title-sep3 mb-30">
                        cover image
                    </h4>
                    <div class="drop-file">
                        <a href="#" class="w-100">
                            <i class="far fa-plus-square"></i>
                            <p class="mb-0">Drop files here to upload</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        opening hours
                    </h4>
                </div>
                <div class="col-12 mb-30">
                    <div class="clone-wrap">
                        <div class="row clone-section">
                            <div class="col-sm-11 col-12">
                                <form class="listing-form" action="#">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <select class="form-control custom-select" id="day">
                                                <option>day</option>
                                                <option>monday</option>
                                                <option>tuesday</option>
                                                <option>wednesday</option>
                                                <option>thrusday</option>
                                                <option>thrusday</option>
                                                <option>friday</option>
                                                <option>saturday</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <select class="form-control custom-select" id="opening-time">
                                                <option>Opening Time</option>
                                                <option>11am</option>
                                                <option>12am</option>
                                                <option>1pm</option>
                                                <option>2pm</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <select class="form-control custom-select" id="closing-time">
                                                <option>closing Time</option>
                                                <option>11pm</option>
                                                <option>12pm</option>
                                                <option>1pm</option>
                                                <option>2pm</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-1 col-12 text-sm-right text-center">
                                <span class="remove-section">
                                    <i class="fa fa-times"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <span class="add-section">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        pricing
                    </h4>
                </div>
                <div class="col-12 mb-30">
                    <div class="clone-wrap2">
                        <div class="row clone-section">
                            <div class="col-sm-11 col-12">
                                <form class="listing-form" action="#">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <input type="text" id="title" class="form-control" placeholder="title">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" id="description" class="form-control" placeholder="description">
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-12">
                                            <input type="text" id="price" class="form-control" placeholder="price">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-1 col-12 text-sm-right text-center">
                                <span class="remove-section">
                                    <i class="fa fa-times"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <span class="add-section">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="listing-submit">
                        <button type="submit" class="btn btn-one btn-anim">save listing</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- add-list end -->


    <!-- footer starts -->
    <?php include 'footer.php';?>
	 <!-- footer end -->

</body>

</html>