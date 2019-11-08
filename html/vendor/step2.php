<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Addons | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- PAGE LEVEL STYLES-->
    <style>
      .data-widget-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 40px;
        color: #6a89d7;
      }
     .faq-tabs .nav-link {
      text-align: center;
      padding: 1.8rem 1rem;
      background-color: #fff;
      border: 1px solid #ccc;
     
      }
      .faq-tabs .nav-link:hover {
      }
      .faq-tabs .nav-link.active {
        color: #fe4d2e;
        border-color: #fe4d2e;
        background-color: #fff;
      }
      .faq-tabs .nav-link.active i {
        color: #fe4d2e !important;
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
	  .faq-tabs .nav-link.active {
			color:black;
			border-color: #7c1ab5;
			background-color: #fff;
		}
	.faq-tabs .nav-link.active i {
			color: #fff !important;
		}
	.preview-images-zone {
		width: 100%;
		border: 1px solid #ddd;
		min-height: 180px;
		/* display: flex; */
		padding: 5px 5px 0px 5px;
		position: relative;
		overflow:auto;
	}
	.preview-images-zone > .preview-image:first-child {
		height: 185px;
		width: 185px;
		position: relative;
		margin-right: 5px;
	}
	.preview-images-zone > .preview-image {
		height: 90px;
		width: 90px;
		position: relative;
		margin-right: 5px;
		float: left;
		margin-bottom: 5px;
	}
	.preview-images-zone > .preview-image > .image-zone {
		width: 100%;
		height: 100%;
	}
	.preview-images-zone > .preview-image > .image-zone > img {
		width: 100%;
		height: 100%;
	}
	.preview-images-zone > .preview-image > .tools-edit-image {
		position: absolute;
		z-index: 100;
		color: #fff;
		bottom: 0;
		width: 100%;
		text-align: center;
		margin-bottom: 10px;
		display: none;
	}
	.preview-images-zone > .preview-image > .image-cancel {
		font-size: 18px;
		position: absolute;
		top: 0;
		right: 0;
		font-weight: bold;
		margin-right: 10px;
		cursor: pointer;
		display: none;
		z-index: 100;
	}
	.preview-image:hover > .image-zone {
		cursor: move;
		opacity: .5;
	}
	.preview-image:hover > .tools-edit-image,
	.preview-image:hover > .image-cancel {
	display: block;
	}
	.ui-sortable-helper {
		width: 90px !important;
		height: 90px !important;
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
			  	<h1 class="page-title page-title-sep">General</h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="col-md-12 col-xs-12 ">
                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">PLEASE CHOOSE ADDITIONAL FEATURES</h5>
						<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
					</div>
				    <div class="card-body">
                    <form class="circle-steps wizard clearfix" id="form-wizard" action="javascript:;" novalidate="novalidate" role="application">
                      <div class="steps clearfix">
                        <ul role="tablist">
                          <li role="tab"  aria-disabled="false" aria-selected="true">
                            <a id="form-wizard-t-0" href="step1.php" aria-controls="form-wizard-p-0">
                              <span class="current-info audible">current step: 
                              </span>
                              <span class="step-number">1
                              </span> Step 1
                            </a>
                          </li>
                          <li role="tab"  class="disabled" aria-disabled="true">
                            <a id="form-wizard-t-1" href="#" aria-controls="form-wizard-p-1">
                              <span class="step-number">2
                              </span> Step 2
                            </a>
                          </li>
                          <li role="tab" class="disabled" aria-disabled="true">
                            <a id="form-wizard-t-2" href="#" aria-controls="form-wizard-p-2">
                              <span class="step-number">3
                              </span> Step 3
                            </a>
                          </li>
                          <li role="tab" class="first current" class="disabled last" aria-disabled="true">
                            <a id="form-wizard-t-3" href="step4.php" aria-controls="form-wizard-p-3">
                              <span class="step-number">4
                              </span> Step 4
                            </a>
                          </li>
						   <li role="tab" class="disabled last" aria-disabled="true">
                            <a id="form-wizard-t-4" href="#" aria-controls="form-wizard-p-4">
                              <span class="step-number">5
                              </span> Step 5
                            </a>
                          </li>
                        </ul>
                      </div>
                    </form>
                  </div>
                  <div class="card-body">
                    
                    
                    <div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->

						
							
							<form>
							<div class="card-body">
								<fieldset class="form-group">
									<a href="javascript:void(0)" onclick="$('#pro-image').click()" class="div_show"><h5 class="box-title" style="color: #211f20">Upload Image</h5></a>
									<input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control " multiple>

								</fieldset>
								<div class="preview-images-zone" style="display: none;">
								</div>
								 <a class="btn btn-warning btn-cons" style="color: white;float:left;margin-top:15px;" href="step2.php">BACK</a>
									<a class="btn btn-success btn-cons" style="color: white;float:right;margin-top:15px;" href="step4.php">NEXT</a>
							  </div>
							  
							</form>
						
					  </div>
                  </div>
                </div>
                <div class="card card-default hd_card">
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
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(document).ready(function() {
		document.getElementById('pro-image').addEventListener('change', readImage, false);
		
		$( ".preview-images-zone" ).sortable();
		
		$(document).on('click', '.image-cancel', function() {
			let no = $(this).data('no');
			$(".preview-image.preview-show-"+no).remove();
		});
	});

	var num = 4;
	function readImage() {
		if (window.File && window.FileList && window.FileReader) {
			var files = event.target.files; //FileList object
			var output = $(".preview-images-zone");

			for (let i = 0; i < files.length; i++) {
				var file = files[i];
				if (!file.type.match('image')) continue;
				var fileName = file.name;
				var picReader = new FileReader();
				
				picReader.addEventListener('load', function (event) {
					
					var picFile = event.target;
					
					var html =  '<div class="preview-image preview-show-' + num + '">' +
								'<div class="image-cancel" data-no="' + num + '">x</div>' +
								'<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
								'<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">'+fileName+'</a></div>' +

								'</div>';

					output.append(html);
					num = num + 1;
					
				});

				picReader.readAsDataURL(file);
			}
			$("#pro-image").val('');
		} else {
			console.log('Browser not support');
		}
	}

	</script>
	<script>
	$(".div_show").click(function(){
	  $(".preview-images-zone").show();
	});
	</script>
  </body>
</html>
