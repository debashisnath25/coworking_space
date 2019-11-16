<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Bookings | Wanted 7
    </title>
    <?php
include("common/metalinks.php");
?>
    <!-- PAGE LEVEL VENDORS-->
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
    <link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <style>.faq-tabs .nav-link {
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
      .dt-buttons {
        padding-bottom: 15px;
        margin-bottom: -50px;
      }
      .order_div{
        background: #F2F3FA;
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
            <div class="page-heading">
              <div class="page-breadcrumb">
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> Bookings
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="faq-group-1">
                      <div class="card" style="border:1px solid #7c1ab5">
                        <div class="card-header cardhdd">
                          <h5 class="box-title" style="color:#fff;">Bookings RECEIVED
                          </h5>
                          <div class="card-actions">
                            <a class="card-collapse">
                              <i class="ti-angle-down">
                              </i>
                            </a>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row mb-3"  style="border-bottom:1px solid #cccccc;">
                            <div class="col-md-2 col-sm-12 col-xs-12 " style="padding:3px !important;">
                              <label for="validationCustom04">Booking Id
                              </label>
                              <input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter Order Id" required="">
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
                              <label for="validationCustom04">Plan Type
                              </label>
                              <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid" multiple="multiple">
								<optgroup label="Plan Type">
									<option>Monthly</option>
									<option>Quaterly</option>
									<option>Yearly</option>
								</optgroup>
								
								
                              </select>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
                              <label >From
                              </label>
                              <input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
                              <label for="validationCustom04">To
                              </label>
                              <input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="Select Date">
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12" style="padding:3px !important;">
                              <label for="validationCustom04">Sort
                              </label>
                              <select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
                                <option selected disabled>Filters
                                </option>
                                <option>Highest First
                                </option>
                                <option>Lowest First
                                </option>
                                <option>Latest First
                                </option>
                                <option>Earliest First
                                </option>
                              </select>
                            </div>
                            <div class="col-md-1 col-sm-12 col-xs-12" style="padding:3px !important;">
                              <button class="btn btn-primary clr" style="margin-top: 27px;" type="submit">
                                <span class="btn-icon">
                                  <i class="ft-search">
                                  </i>Search
                                </span>
                              </button>
                            </div>
                          </div>
                          <div class="table-responsive">
							<table class="table table-bordered table-striped w-100" id="dt-buttons">
								<thead class="">
									<tr>
										<th>Booking ID</th>
                                        <th>Office Space Image & Details</th>
										<!-- <th>Office Space Details</th> -->
										<th>Booking Amount</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										for($i=1;$i<=12;$i++){
									?>
									<tr>
										<td><a class="btn btn-outline-primary" href="javascript:void(0);" data-toggle="modal" data-target="#product_preview_modal">Booking ID<br/>108737NT</a></td>
										<td>
											<div class="media col-md-12 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
												<span class="position-relative d-inline-block mr-4">
												  <img class="rounded-lg" src="images/vendor-images/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="image" width="100">
												</span>
												<div class="media-body mt-2">
												  <div class="h4 font-14">Work with us
												  </div>
												  <div class="text-muted mb-1 font-12" style="color: #878787;">
													<span>Category : Co-working Space
													</span>
													<br />
												  </div>
												</div>
											</div>
										</td>
										<!-- <td>
											<div class="media col-md-12 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
												<div class="media-body mt-2">
												  <div class="h4 font-14">Work with us
												  </div>
												  <div class="text-muted mb-1 font-12" style="color: #878787;">
													<span>Category : Co-working Space
													</span>
												  </div>
												</div>
											</div>
										</td> -->
										<td><div class="media-body mt-2">
											  <div class="h4 font-14">
												<span style="font-family:arial;">₹</span>&nbsp;599.00
											  </div>
											</div>
										</td>
										<td> <span class="badge badge-success badge-pill">Confirmed</span> </td>
										<td style="min-width:80px;">
											<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-pen" style="font-size:11px;"></i></button>
											<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
										</td>
									</tr>
									<?php
										}
									?>
								</tbody>

							</table>
						</div>
          
</div>
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
<script src="js/vendor-js/datatables.min.js">
</script>
<script src="js/vendor-js/bootstrap-datetimepicker.min.js">
</script>
<script src="js/vendor-js/jquery.validate.min.js">
</script>

<script>
      $(function() {
		$('#dt-buttons').DataTable({
		  "searching": true,
		  "pageLength":5,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'copy', 'excel', 'pdf', 'csv', 'print'
		  ]
		});

		$(".dt-buttons").removeClass("btn-group");


		$("#datetimepicker_1, #datetimepicker_2").datetimepicker({
			todayHighlight: !0,
			autoclose: !0,
			format: "yyyy.mm.dd hh:ii",
		});
	  });
    </script>
</body>
</html>
