<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Add Options | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<style>
	  .dt-buttons {
	  	padding-bottom:15px;
	  }
	 .dz-error-message {
	 	display:none !important;
	 }
	 .dz-image {
	 	margin-top: -31px;
		margin-left: -28px;
	 }
	 .dz-message {
	 	margin-top: -2px !important;
	 }
	 .faq-tabs .nav-link {
      padding: 10px;
	  width: 101px;
      border: 1px dashed;
      margin-bottom: 1rem;
      background-color: #fff;
      box-shadow: 0 1px 15px 1px rgba(62,57,107,.07);
	  margin-right:15px;
	  text-align: center;
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
      .faq-list>li {
        padding: .75rem 0;
      }
      .faq-list>li>a {
        display: block;
        position: relative;
        color: inherit;
        font-weight: 500;
        font-size: 16px;
      }
      .faq-list>li>a:after {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        font-family: 'themify';
        content: "\e61a";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
      }
      .faq-list>li>a[aria-expanded=true] {
        color: #2949ef;
      }
      .faq-list>li>a[aria-expanded=true]:after {
        content: "\e622";
      }
      .faq-answer {
        padding: 1rem 0;
        margin-top: 1rem;
        color: #6c757d;
      }
	  .nav-pills {
	    padding-left: 16px;
		padding-top: 15px;
	  }
	  .list-group-item {
	  	cursor: pointer;
		background-color: #E9ECEF;
	  }
	  .btn-light-solid {
			background-color: #f4f5f9;
			border-color: #f4f5f9;
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
            <div>
				<?php
					include("common/product_header.php");
				?>
				<div class="row">
					<div class="col-lg-12 mb-4">
						<button class="btn btn-primary clr" onclick="add_new_option();"><span class="btn-icon"><i class="fas fa-plus"></i>Add New Option</span></button>
						<button class="btn btn-default del" style="background-color: #ccc;">Delete Option</button>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-body">
								<div class="row" id="main_panel" style="display:none;margin-bottom:100px;">
									<div class="col-md-3" style="border-right:1px solid #dee2e6;">
										<ul class="list-group" id="sortable">
                                            <li class="list-group-item" id="li_name" style="display:none;">&nbsp;</li>
                                        </ul>
									</div>
									<div class="col-md-9" id="option_div">
									</div>
								</div>
								<div class="row" style="text-align:center;">
									<div class="col-md-12 mb-3">
										<img src="images/vendor-images/size.png">
									</div>
									<div class="col-md-12 mb-3">
										<span class="text-primary"  style="text-align:center;">Try Product Variations<span>
										<p class="text-secondary" style="font-size:13px;">Looking to add stock control, images, SKUs and prices to product options? Product variations let you specify these details for each combination of product options individually.<p>
									</div>
									
								</div>
							</div>
						</div>
					  </div>
					  <?php
						include("common/product_sidebar.php");
					  ?>
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
		include("common/extra.php");
    ?>
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );

function add_new_value()
{
	var htmlz = '<tr><td><input class="form-control form-control-solid" id="validationCustom03" type="text" required=""></td><td><select class="form-control form-control-sm" style="width:45%;float:left;margin-right:5px;"><option>Rs.</option><option>%</option></select><input class="form-control form-control-solid form-control-sm" style="width:45%;float:left;" id="validationCustom03" type="number" required=""></td><td><div class="check-list"><label class="radio radio-grey radio-primary"><input type="radio" name="cl" ><span></span></label></div></td><td><i class="ft-trash-2 remove" style="font-size:20px;margin-right:4px;"></i></td></tr>';

    $("#tbody_value").append(htmlz);

	$("body").on("click",".remove",function(){ 
          $(this).parents("tr").remove();
    });
}

function add_new_option(){
	$('#main_panel').show();
	var container = '<div class="form-row"><div class="col-md-6 mb-3"><label for="validationCustom01" class="active">Option name</label><input class="form-control form-control-solid" id="opt_name" type="text" placeholder="Option name" onkeyup="write_option(this.value)"required=""></div><div class="col-md-6 mb-3"><button class="btn btn-default" style="background-color: #ccc;margin-top:28px;" onclick="add_new_value();"><span class="btn-icon"><i class="fas fa-plus"></i>Add New Value</span></button></div></div><table class="table table-bordered mb-3"><thead class="thead-light"><tr><th scope="col">Option values</th><th scope="col">Price modifier</th><th scope="col">Default value</th><th scope="col">Action</th></tr></thead><tbody id="tbody_value"></tbody></table>';

	$("#option_div").html(container);
	$("body").on("click",".del",function(){ 
          $("#option_div").empty();
		  $('#main_panel').hide();
		  $('#li_name').hide();
    });
}

function write_option(e){
	$('#li_name').show();
	$('#li_name').html(e);
}
function stock_levelz(){
	$('#stockzz').hide();
	$('#stockzz_qty').show();
}
  </script>
  </body>
</html>
