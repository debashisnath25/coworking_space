<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Add Category | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="css/vendor-css/dropzone.min.css" rel="stylesheet" /><!-- THEME STYLES-->
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<link href="css/vendor-css/summernote-bs4.css" rel="stylesheet" />
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
				<div class="row">
					<div class="col-lg-12 mb-4">
						<button class="btn btn-primary clr"><span class="btn-icon"><i class="fas fa-plus"></i>Add Root Category</span></button>
						<a class="btn btn-default del" href="add_subcategory.php" style="background-color: #ccc;color:#000;"><span class="btn-icon"><i class="fas fa-plus"></i>Add Subcategory</span></a>
						<button class="btn btn-default del" style="background-color: #ccc;">Delete Category</button>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-body">
								<div class="row">
									<div class="col-md-3" style="border-right:1px solid #dee2e6;">
										<h5 class="card-title" style="font-size: 15px;">Categories</h5>
										<ul class="list-group" id="sortable">
                                            <li class="list-group-item" id="li_name">Wanted7 <span class="badge badge-success badge-pill" style="float: right;">5 / 7</span></li>
											<li class="list-group-item" id="li_name">New Arrivals <span class="badge badge-success badge-pill" style="float: right;">5</span></li>
											<li class="list-group-item" id="li_name">Sale Items <span class="badge badge-success badge-pill" style="float: right;">10</span></li>
											<li class="list-group-item" id="li_name">Main/All <span class="badge badge-success badge-pill" style="float: right;">20</span></li>
                                        </ul>
									</div>
									<div class="col-md-9">
										<h5 class="text-muted mb-4" style="font-size: 15px;">Add New Category</h5>
										<div>
											 <ul class="nav line-tabs">
                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1-1">Genaral</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab1-2">Category Products</a></li>
                                            </ul>
											<div class="tab-content mt-4">
                                                <div class="tab-pane fade show active" id="tab1-1">
                                                   <div class="form-group mb-4 row">
														<dt class="col-sm-2" style="padding-top:10px;">Name</dt>
														<div class="col-sm-6">
															<input class="form-control form-control-solid" id="validationCustom03" type="text"required="">
														</div>
														<div class="col-sm-4" >
															<label class="ui-switch switch-solid"><dt style="padding-top:7px;">Availability</dt><input type="checkbox" checked="" ><span></span></label>
														</div>
													</div>
													<div class="form-group mb-4 row">
														<dt class="col-sm-2" style="padding-top:10px;">Category Image</dt>
														<div class="col-sm-10" style="text-align:left;">
															<div class="dropzone dz-clickable"  style="max-width:140px;max-height:140px;margin-right:9px;" id="mydropzoneSingle" >
																<div class="dz-message"><i class="ti-import text-primary font-40"></i>
																	<div class="mt-3 font-15">Upload Image</div>
																</div>
															</div>
														</div>
													</div>
													<div class="form-group mb-4 row">
														<dt class="col-sm-2" style="padding-top:10px;">Description</dt>
														<div class="col-sm-10">
															<div id="summernote">
															</div>
														</div>
													</div>
													<button class="btn btn-primary clr" type="button"> Save </button>
													<button class="btn btn-default" type="reset"> Clear </button>
                                                </div>
                                                <div class="tab-pane fade" id="tab1-2">
													<button class="btn btn-primary btn-sm clr" data-toggle="modal" data-target="#exampleLargeModal">Assign Products to Category</button>
													<button class="btn btn-default btn-sm del" style="background-color: #ccc;">Remove All</button>
													<a class="btn btn-default btn-sm del" href="add_products.php" style="background-color: #ccc;color: #000;">Create New Product</a>
													<div class="p-2 bg-secondary-100 flexbox  mt-4">
														<div class="col-md-3">
															SKU
														</div>
														<div class="col-md-7">
															Name
														</div>
														<div class="col-md-2">
															
														</div>
													</div>
													<ul class="list-group" id="sortable1">
														<li class="list-group-item" style="background-color: #fff;" id="li_name">
															<div class="row">
																<div class="col-md-3">
																	ABC123
																</div>
																<div class="col-md-7">
																	Nike Shoes Black
																</div>
																<div class="col-md-2">
																	<i class="ft-trash-2"></i>
																</div>
															</div>
														</li>
														<li class="list-group-item" style="background-color: #fff;" id="li_name">
															<div class="row">
																<div class="col-md-3">
																	DEF456
																</div>
																<div class="col-md-7">
																	Puma Black Jacket
																</div>
																<div class="col-md-2">
																	<i class="ft-trash-2"></i>
																</div>
															</div>
														</li>
													</ul>
                                                </div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>
				</div>
            </div>
            <!-- END: Page content-->
          </div>
		  <div class="modal fade" id="exampleLargeModal" tabindex="-1" role="dialog" aria-labelledby="exampleLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header cardhdd">
							<h5 class="modal-title h4" id="exampleLargeModalLabel" style="color:#fff;">Add Products</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times" style="font-size:15px;color:#fff;"></i></button>
						</div>
						<div class="modal-body">
							<div class="form-group mb-4 row">
								<dt class="col-sm-2" style="padding-top:10px;">Filter</dt>
								<div class="col-sm-4">
									<input class="form-control form-control-solid"  type="text" placeholder="SKU" required="">
								</div>
								<div class="col-sm-6" >
									<input class="form-control form-control-solid"  type="text" placeholder="Name" required="">
								</div>
							</div>
							<div class="table-responsive">
                                    <table class="table table-bordered w-100" id="dt-base">
                                        <thead class="thead-light">
                                            <tr>
												<th><label class="checkbox checkbox-primary mt-3"><input type="checkbox" id="checkAll"><span></span></label></th>
                                                <th>SKU</th>
                                                <th>Name</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><label class="checkbox checkbox-primary mt-3"><input type="checkbox"><span></span></label></td>
                                                <td>ABC123</td>
                                                <td>Nike SHoe Black</td>
												<td><i class="ft-plus" style="color:#220132;font-size:20px;"></i></td>
                                            </tr>
                                            <tr>
                                                <td><label class="checkbox checkbox-primary mt-3"><input type="checkbox"><span></span></label></td>
                                                <td>DEF456</td>
                                                <td>Puma Black Jacket</td>
												<td><i class="ft-plus" style="color:#220132;font-size:20px;"></i></td>
                                            </tr>
                                            <tr>
                                                <td><label class="checkbox checkbox-primary mt-3"><input type="checkbox"><span></span></label></td>
                                                <td>GHI789</td>
                                                <td>Reebok White Cap</td>
												<td><i class="ft-plus" style="color:#220132;font-size:20px;"></i></td>
                                            </tr>
										</tbody>
									</table>
								</div>
								<button class="btn btn-primary clr" type="button"> Add Products </button>
						</div>
					</div>
				</div>
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
	<script src="js/vendor-js/dropzone.min.js"></script><!-- CORE SCRIPTS-->
	<script src="js/vendor-js/summernote-bs4.min.js"></script>
   
    <script>
	   $(document).ready(function() {
	  var t = $('#summernote').summernote({
		  height: 150,
		  focus: true
	  });
	  $("#btn").click(function(){
		  $('div.note-editable').height(150);
	  });
	});

       $("div#mydropzoneSingle").dropzone({
			url: "./",
			maxFiles: 1,
			maxFilesize: 5, // MB
			addRemoveLinks: !0,
		});
	  $( function() {
		$( "#sortable" ).sortable();
		$( "#sortable1" ).sortable();
	  } );
  </script>
  
  </body>
</html>
