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
	 
	 
  <script  src="https://code.jquery.com/jquery-2.1.0.min.js"  crossorigin="anonymous"></script>
 
  </head>
  <body>
    <div class="container-scroller">
    
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="dashboard.php"><img src="assets/images/edhacare-logo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/small-logo-icon.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
           
          </div>
          <ul class="navbar-nav navbar-nav-right">
                    
            <li class="nav-item nav-language dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                
                <div class="nav-language-text">
                  <p class="mb-1 text-black">English</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                <a class="dropdown-item" href="#">
                 
                  <div class="nav-language-text">
                    <p class="mb-1 text-black">Arabic</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  
                  <div class="nav-language-text">
                    <p class="mb-1 text-black">English</p>
                  </div>
                </a>
              </div>
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"><p class="notification">2</p></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Patient report</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Patient booking</h6>
                    <p class="text-gray ellipsis mb-0"> Albert smith! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-success"><p class="notification">3</p></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/user-icon.png" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Hassan pervaiz</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/user-icon.png" alt="">
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase ps-2 text-dark">User Options</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Inbox</span>
                    <span class="p-0">
                      <span class="badge badge-primary">3</span>
                      <i class="mdi mdi-email-open-outline ms-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Profile</span>
                    <span class="p-0">
                      <span class="badge badge-success">1</span>
                      <i class="mdi mdi-account-outline ms-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Settings</span>
                    <i class="mdi mdi-settings"></i>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                   <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="index.php">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ms-1"></i>
                  </a>
                </div>
              </div>
            </li>
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <!--<li class="nav-item nav-category">Suresh-Testing</li>-->
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon-bg"><i class="fa fa-home"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#dropdown-appointments" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="fa fa-calendar-plus-o"></i></span>
                <span class="menu-title">Appointments</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="dropdown-appointments">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#"> View Appointment </a></li>
                  <li class="nav-item"> <a class="nav-link" href="#"> Book Appointment </a></li>
                  <li class="nav-item"> <a class="nav-link" href="#"> Edit Appointment </a></li>
                </ul>
              </div>
            </li>
			<li class="nav-item active">
              <a class="nav-link" data-bs-toggle="collapse" href="#doctors-patients" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="fa fa-users"></i></span>
                <span class="menu-title">Patients </span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="doctors-patients">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="all-patients.php">All Patients </a></li>
                  <li class="nav-item"> <a class="nav-link active" href="add-patient.php">Add Patient </a></li>
                 <li class="nav-item"> <a class="nav-link" href="patient-profile.php">Patient Profile  </a></li>
                </ul>
              </div>
            </li>
			<li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#dropdown-doctors" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="fa fa-user-md"></i></span>
                <span class="menu-title">Doctors</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="dropdown-doctors">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">All Doctors</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Add Doctor </a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Edit Doctor  </a></li>
				  <li class="nav-item"> <a class="nav-link" href="#">Doctor Profile  </a></li>
                </ul>
              </div>
            </li>
			<li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#dropdown-hospitals" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="fa fa-hospital-o"></i></span>
                <span class="menu-title">Hospitals</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="dropdown-hospitals">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">All Hospitals</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Add Hospital </a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Edit Hospital  </a></li>
				</ul>
              </div>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#dropdown-treatment" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="fa fa-medkit"></i></span>
                <span class="menu-title">Treatment</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="dropdown-treatment">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">All Treatments</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Add Treatments </a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Edit Hospital  </a></li>
				</ul>
              </div>
            </li>
						
			<li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon-bg"><i class="fa fa-file-text"></i></span>
                <span class="menu-title">Tele Consultancy</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon-bg"><i class="fa fa-file-text"></i></span>
                <span class="menu-title">Patient Report</span>
              </a>
            </li>
            
			<li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon-bg"><i class="fa fa-money"></i></span>
                <span class="menu-title">Get Esitmate</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon-bg"><i class="fa fa-plane"></i></span>
                <span class="menu-title">Pre Visit Services</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon-bg"><i class="fa fa-envelope"></i></span>
                <span class="menu-title">Received Emails</span>
              </a>
            </li>
			
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </div>
            </li>
           
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="index.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
		
		
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
            
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-12">
                <div class="p-4">
                  <!--form-->
		              <form class="add-patient-forms" action="javascript:void();" method="post">
                  <h3 class="form-title mb-3">Treatment Esitmate</h3>
				                 
                    
                      <div class="form-group row">
                         <div class="col-sm-12">
                           <label>Upload Reports</label>
                         <input type="file" class="form-control" id="patientreport" placeholder="report">
                        </div>
                      </div>
                      <div class="form-group row">
                         <div class="col-sm-12">
                         <input type="text" class="form-control" id="patientage" placeholder="Age">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12">
							                <label>Gender:</label>
                              <label><input type="radio" name="optionsRadios" id="optionsRadios1" checked=""> Male</label>
                              <label><input type="radio" name="optionsRadios" id="optionsRadios2"> Female</label>
                              <label><input type="radio" name="optionsRadios" id="optionsRadios2"> Other</label>
                        
                        </div>
                      </div>
                      <div class="form-group row">
                         <div class="col-sm-12">
                          <input type="text" class="form-control" id="passport-number" placeholder="Enter Passport Number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <textarea type="text" class="form-control" placeholder="Notes: Any comments related to patient's diagnosis summery or any specific instructions"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <textarea type="text" class="form-control" placeholder="Dignosis summery:"></textarea>
                        </div>
                      </div>
                       <div class="form-group row">
                            <div class="col-sm-12">
                              <select class="form-control">
                              <option>Hospital</option>
                              <option>Fortis Hospital</option>
                              <option>Apollo Hospital</option>
                              <option>Max Hospital</option>
                              </select>
                            </div>
                          </div>
                                          
                    </div>     
                      <!--testing-->
                   
                      
                    </div>   
                                        
                      <!--/testing-->
                   				  
                </div>
              </div>
			  
              <button type="submit" class="btn btn-primary me-2">Submit Request</button>
              </form>     
                  
                     
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