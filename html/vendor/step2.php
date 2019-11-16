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
	.preview-images-zone {
		width: 100%;
		border: 1px dashed #7c1ab5;
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
			  	<h1 class="page-title page-title-sep">Workspace Image Upload</h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
             <div class="row">
                <?php include ('common/step_sidebar.php');?>
                <div class="col-md-9 col-xs-12 ">
				  <div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Workspace Image Upload</h5>
						<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
					</div>
                  <div class="card-body">
                    <div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->

							<form>
							<div class="card-body">
								<fieldset class="form-group">
									<a href="javascript:void(0)" onclick="$('#pro-image').click()" class="btn btn-primary div_show">Upload Image</a>
									<input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control " multiple>

								</fieldset>
								<div class="preview-images-zone">
								</div>
								 <a class="btn btn-warning btn-cons" style="color: white;float:left;margin-top:15px;" href="step1.php">BACK</a>
									<a class="btn btn-success btn-cons" style="color: white;float:right;margin-top:15px;" href="step3.php">NEXT</a>
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
