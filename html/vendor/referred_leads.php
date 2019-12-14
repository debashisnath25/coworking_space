<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Referred Leads | Bundesk</title>
    <?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />

	<style>
	  .dt-buttons {
		padding-bottom: 15px;
		margin-bottom: -50px;
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
               
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="col-md-12 col-xs-12 ">
                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Referred Leads</h5>
						<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
					</div>
				    
                  <div class="card-body">
                    
                    
                    <div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
							<form>
							<div class="card-body">
								<div class="table-responsive">
                                    <table class="table table-bordered table-striped w-100" id="dt-buttons">
                                        <thead class="">
                                            <tr>
                                                <th style="min-width:80px;">Lead Name</th>
                                                <th style="min-width:80px;">Lead Email</th>
												<th style="min-width:80px;">Lead Phone</th>
                                                <th style="min-width:80px;">Referred By</th>
                                                <th style="min-width:80px;">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												for($i=1;$i<=12;$i++){
											?>
                                            <tr>
                                                <td>Armaan Kashyap</td>
                                                <td>abc@gmail.com</td>
												<td>9876543210</td>
												<td>Kunal Kashyap</td>
                                                <td>8/11/2019</td>
                                            </tr>
											<?php
												}	
											?>
                                        </tbody>
                                    </table>
                                </div>
							  </div>
							</form>
						
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
   
    <script src="js/vendor-js/jquery.validate.min.js">
    </script>
	<script src="js/vendor-js/datatables.min.js"></script>
	<script>
      $(function() {
		$('#dt-buttons').DataTable({
		  "searching": true,
		  "pageLength":10,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'excel', 'pdf', 'csv'
			]
		});
	});
	</script>
  </body>
</html>
