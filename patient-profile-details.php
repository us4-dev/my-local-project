<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edhacare</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
      
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custome.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
	
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
           
            
					<div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Patient Profile</h4>
							<!--patients-->
                 
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-user-details user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="assets/images/user-img.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600">Rajesh Singh</h6>
                                <p>rajesh@gmail.com</p> 
                                <a href="add-patient.php"><i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i></a>
                                <p class="text-left user-menu-icon"><i class="fa fa-user"></i><a href="#attendant-section">Attendant</a></p>
                                <p class="text-left user-menu-icon"><i class="fa fa-medkit"></i><a href="#donor">Donar</a></p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600 color-red">General Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Passport Number</p>
                                        <h6 class="text-muted f-w-400">0251254125</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">+91 8979989898</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Gender</p>
                                        <h6 class="text-muted f-w-400">Male</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Address</p>
                                        <h6 class="text-muted f-w-400">345, Arun Vihar, Sector - 37, Noida, India.</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600 color-red">Treatment Infomation</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Treatment</p>
                                        <h6 class="text-muted f-w-400">Spine Surgery</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Age</p>
                                        <h6 class="text-muted f-w-400">33</h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Marital Status</p>
                                        <h6 class="text-muted f-w-400">Married</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Write Your medical conditions</p>
                                        <h6 class="text-muted f-w-400">Zoonotic diseases</h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Hospital</p>
                                        <h6 class="text-muted f-w-400">Fortis Hospital</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Doctor</p>
                                        <h6 class="text-muted f-w-400">Dr. Sasurabh Chandra</h6>
                                    </div>
                                </div>

                                <h6 id="attendant-section" class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600 color-red">Attendant</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Name</p>
                                        <h6 class="text-muted f-w-400">Janney Albert</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Passport Number</p>
                                        <h6 class="text-muted f-w-400">12024520</h6>
                                    </div>
                                </div>

                                <h6 id="donor" class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600 color-red">Donor</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Name</p>
                                        <h6 class="text-muted f-w-400">Deay Albert</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Passport Number</p>
                                        <h6 class="text-muted f-w-400">12024520</h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Country</p>
                                        <h6 class="text-muted f-w-400">Bangladesh</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Relation with patient</p>
                                        <h6 class="text-muted f-w-400">Brother</h6>
                                    </div>
                                </div>

                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


							<!--/patients-->
							
							
						  </div>
						</div>
						</div>
			  
					</div>
		  
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
  
  
 

  </body>
</html>