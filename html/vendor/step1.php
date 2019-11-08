<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Addons | Wanted 7
    </title>
    <?php
include("common/metalinks.php");
?>
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
    <link href="css/vendor-css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <style>
      .faq-tabs .nav-link {
        min-width: 100px;
        padding: 1rem;
        border: 1px dashed;
        margin-bottom: 1rem;
        background-color: #fff;
        box-shadow: 0 1px 1px 1px rgba(62,57,107,.07);
      }
      .faq-tabs .nav-link.active {
        color: #fff;
        border-color: #7c1ab5;
        background-color: #7c1ab5;
      }
      .faq-tabs .nav-link.active .faq-item-text {
        color: rgba(255,255,255,.5)!important;
      }
      .faq-tabs .nav-link.active i {
        color: #fff !important;
      }
    </style>
  </head>
  <body>
    <div class="page-wrapper">
      <div class="content-wrapper">
        <!-- BEGIN: Sidebar-->
        <?php
include("common/sidebar.php");
?>
        <!-- END: Sidebar-->
        <!-- BEGIN: Content-->
        <div class="content-area">
          <!-- BEGIN: Header-->
          <?php
include("common/header.php");
?>
          <!-- END: Header-->
          <div class="page-content fade-in-up">
            <!-- BEGIN: Page heading-->
            <div class="page-heading" style="margin-left:13px;">
              <div class="page-breadcrumb">
                <h1 class="page-title page-title-sep">Workspace Information
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="row">
                <?php include ('common/step_sidebar.php');?>
                <div class="col-md-9 col-xs-12 ">
                  <div class="card card-fullheight" style="border:1px solid #7c1ab5">
                    <div class="card-header cardhdd">
                      <h5 class="box-title" style="color:#fff;">Workspace Information
                      </h5>
                      <!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
                    </div>
                    <div class="card-body">
                      <div class="col-lg-12">
                        <!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
                        <form>
                          <div class="card-body">
                            <div class="form-group mb-4 row">
                              <dt class="col-sm-4" style="padding-top:10px;">Title of the Property
                              </dt>
                              <div class="col-sm-8">
                                <input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Property Title" required="">
                              </div>
                            </div>
                            <div class="form-group mb-4 row">
                              <dt class="col-sm-4" style="padding-top:10px;">Type
                              </dt>
                              <div class="col-sm-8">
                                <select class="selectpicker form-control form-control-solid">
                                  <option selected disabled>Choose Property Type
                                  </option>
                                  <option>Meeting Room
                                  </option>
                                  <option>Coworking Space
                                  </option>
                                  <option>Private Office
                                  </option>
                                  <option>Training Room
                                  </option>
                                  <option>Business Centre
                                  </option>
                                  <option>Coworking Cafes
                                  </option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group mb-4 row">
                              <dt class="col-sm-4" style="padding-top:10px;">Capacity
                              </dt>
                              <div class="col-sm-8">
                                <input id="touchspin_2" type="text" value="0">
                              </div>
                            </div>
                            <div class="form-group mb-4 row">
                              <dt class="col-sm-4" style="padding-top:10px;">Price
                              </dt>
                              <div class="col-sm-8">
                                <div class="row">
                                  <div class="col-sm-6 col-xs-12">
                                    <input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="" required="">
                                    <span style="font-size:12px;">Per Person/ 
                                      <b>Daily
                                      </b>
                                    </span>
                                  </div>
                                  <div class="col-sm-6 col-xs-12">
                                    <input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="" required="">
                                    <span style="font-size:12px;">Per Person/ 
                                      <b>Monthly
                                      </b>
                                    </span>
                                  </div>
                                  <div class="col-sm-6 col-xs-12">
                                    <input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="" required="">
                                    <span style="font-size:12px;">Per Person/ 
                                      <b>Quaterly
                                      </b>
                                    </span>
                                  </div>
                                  <div class="col-sm-6 col-xs-12">
                                    <input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="" required="">
                                    <span style="font-size:12px;">Per Person/ 
                                      <b>Yearly
                                      </b>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>				
                            <a class="btn btn-success btn-cons" style="color: white;float:right;" href="step2.php">NEXT
                            </a>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="card card-default hd_card">
                  </div>
                </div>
              </div>
            </div>
            <!-- END: Page content-->
          </div>
          <!-- BEGIN: Footer-->
          <?php
include("common/footer.php");
?>
          <!-- END: Footer-->
        </div>
        <!-- END: Content-->
      </div>
    </div>
    <?php
include("common/scripts.php");
?>
    <script src="js/vendor-js/jquery.validate.min.js">
    </script>
    <script src="js/vendor-js/jquery.steps.min.js">
    </script>
    <script src="js/vendor-js/jquery.bootstrap-touchspin.min.js">
    </script>
    <!-- CORE SCRIPTS-->
    <script>
      $(function() {
        $('#touchspin_2').TouchSpin({
          buttondown_class: 'btn btn-light',
          buttonup_class: 'btn btn-light'
        }
                                   );
      }
       );
    </script>
  </body>
</html>
