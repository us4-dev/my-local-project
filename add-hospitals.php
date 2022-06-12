<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edhacare</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
      
         <!-- Vendor -->
  <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css" />
  <!-- Vendor -->
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custome.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
	
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	 <!--<link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">-->
  <script  src="https://code.jquery.com/jquery-2.1.0.min.js"  crossorigin="anonymous"></script>
  
  

  </head>
  <body>
   
    <div class="container-scroller">

     <!--nav-top-->
      <?php include("nav-top.php") ?>
      <!--end-nav-top-->
      <div class="container-fluid page-body-wrapper">
        <!--nav-side-bar-->
        <?php include("nav-sidebar.php") ?>
        <!--end-nav-side-bar-->
		
		
        <div class="main-panel">
          <div class="content-wrapper">
		  <!---->
		  
		  <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="content">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big icon-warning text-center">
                      <i class="mdi mdi-calendar-check"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      Appointment 
                     <p>680</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="content">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big icon-warning text-center">
                      <i class="mdi mdi-content-cut"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      Operations 
                     <p>63</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
         <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="content">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big icon-warning text-center">
                      <i class="mdi mdi-account-plus"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      New patients 
                     <p>129</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="content">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big icon-warning text-center">
                      <i class="mdi mdi-cash"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      Earning 
                     <p>$ 00.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
		
		  <!---->
		  
		  <!--add-patient-->
		  <div class="row">
            <!--form-->
		
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-12">
                <div class="p-4">
				<form class="add-patient-forms" action="javascript:void();" method="post">
                  <h3 class="form-title mb-3">Add Hospital</h3>
				                      <div class="form-group row">
                                          <div class="col-sm-6">
                                          <input type="text" class="form-control" id="hospitalname" placeholder="Hospital name">
										  </div>
										  <div class="col-sm-6">
                                          <input type="text" class="form-control" id="hospitalPhone" placeholder="Phone Number">
                                          </div>
                                      </div>

                                    
                                    <div class="form-group row">
                                      <div class="col-sm-6 text-black">
                                      <input type="text" class="form-control" id="speciality" placeholder="Speciality">
                                      
                                      </div>
									                    <div class="col-sm-6 text-black">
                                      <input type="email" class="form-control" id="email" placeholder="Email">
                                      </div>
									  
                                    </div>
									 <div class="form-group row">
										  <div class="col-sm-6">
                      <textarea type="text" class="form-control" placeholder="Address"></textarea>
                      </div>
										  <div class="col-sm-6">
                      <select class="form-control" required="">
                            <option value="" selected="">Select Country</option>
                            <option>India</option>
                            <option>Bangaladesh</option>
                            <option>UAE</option>
                            </select>
										  </div>
									  </div>
									
                      <div class="form-group row">
                          <div class="col-sm-6">
                          <select class="form-control" required="">
                            <option value="" selected="">Select City</option>
                            <option>Delhi</option>
                            <option>Gurgaon</option>
                            <option>Noida</option>
                            <option>Varanasi</option>
                            </select>

                          </div>
                          <div class="col-sm-6">
                          <input type="text" class="form-control" id="pin" placeholder="Pin number">
                          
                            </div>
                      </div>
                      <div class="form-group row">
									  <div class="col-sm-12 text-black" >
                                        <textarea type="text" class="form-control h-80" id="anynotes" placeholder="About Hospital"></textarea>
                                      </div>
								    </div>
								    <div class="form-group row">
									  <div class="col-sm-12 text-black">
									   <button type="submit" class="btn btn-primary me-2">Submit</button>
									  </div>
								    </div>
								  </form> 	
										  
                      <!--testing-->
                        </div>
					</div>

            </div>
          </div>
        </div>
      </div>
 				<!--/form-->
					</div>
		  <!--/add-patient-->
          
		  
          <!-- content-wrapper ends -->
		    </div>
        <!-- main-panel ends -->
			
		<!-- partial:partials/_footer.html -->
          <footer class="footer">
		    <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright &copy; <a href="#" target="_blank">edhacare.com </a>2022</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
      
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

<!--add-patient-success-popup--->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-box">
                
                <!-- Modal -->
                <div class="modal fade" id="myModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="modal-icon"><img src="assets/images/patient-add-icon.png"></div>
                                <h3 class="title">Congrats!</h3>
                                <p class="description">You've Added new patient!</p>
                                <div class="btn-group-center">
                                <button class="btn" data-dismiss="modal" onclick="location.href='all-patients.php'">View all patients!</button>
                                <button class="btn" data-dismiss="modal" onclick="location.href='add-patient.php'">Add more patients!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

		 <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({
				  format: "dd-mm-yyyy",
			});
        });
    </script>
<!--add-patient-success-popup--->

    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
   
    <script src="assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
	
	<!--table pagination-->
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="table/js/jquery.dataTables.js"></script>
 <script type="text/javascript">
 var wedhacare = jQuery.noConflict();
      wedhacare(document).ready(function () {
          wedhacare('#tblContact').dataTable({
              "iDisplayLength": 5,
              "lengthMenu": [5,10, 25, 50, 100]
          });
      });
  </script>
<script>
	$("#dateofbirth").change(function(){
		var today = new Date();
		var dob = new Date($("#dateofbirth").val());
		var age = new Date(today - dob).getFullYear() -1970;
		var number = parseFloat($(this).val());
		if (isNaN(number)) {
			number = 0;
		}else{
		$("#age").val(age);
		}
		
	});
</script>

<!--<script>
     var wrapper = $(".add-more-attendant>div");
    var add_button = $(".add-more-attendant-button");

    $(add_button).click(function (e) {
        e.preventDefault();
        $(wrapper).after('<div>hello<a href="#" class="remove_field">X</a></div>');    });

    $(document).on("click",".remove_field",function(){
        $(this).parent().remove();
    });

    

    
</script>-->

 <script>
  /*$(document).ready(function() {
	
		$('#getButton .addPatient').click(function() {
		$('#successbox_wrap').fadeIn(300);  
	});
		$('#close').click(function() {
		$('#successbox_wrap').fadeOut(300);
	});
	
	
	});*/
  </script>

  </body>
</html>