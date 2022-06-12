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
                       <div class="col-lg-12 stretch-card">
						<div class="card">
						  <div class="card-body">
							<div class="row">
								<div class="col-12 page">
									<!--breadcrumb-->
									<ol class="breadcrumb">
										<li><a href="#"><i class="fa fa-home"></i></a></li>
										<li><a href="#">Doctors</a></li>
										<li class="active">All Doctors</li>
									</ol>
									<!--/breadcrumb-->
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
							<h4 class="card-title">All Doctors</h4>
						
							<!--table-->
							<div class="table-responsive">
                      <table id="tblContact" class="table table-striped table-bordered"  cellspacing="0">
                        <thead>
                          <tr style="background:#ddd;">
                            <th>ED-ID</th>
                            <th>image</th>
                            <th> Doctors name </th>
                            <th> Address</th>
                            <th> Hospital</th>
                            <th> Speciality </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
						  <td>dr-01</td>
                            <td class="py-1">
                              <img src="assets/images/doctors-icon/dr-saurabh.jpg" class="dr-img-icon" alt="image">
                            </td>
                            <td>Dr. Saurabh Chandra</td>
                            <td>Gurgaon</td>
                            <td> Fortis Hospital </td>
                            <td>Orthopaedics surgeon</td>
                            <td>
								<a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash" ></i></a> 
                                <a href="doctor-profile.php"><i class="fa fa-eye"></i></a>
                            </td>
                          </tr>
						  
						  <tr>
						  <td>dr-02</td>
                            <td class="py-1">
                              <img src="assets/images/doctors-icon/dr-saurabh-joshi.jpg" class="dr-img-icon" alt="image">
                            </td>
                            <td> Dr Saurabh Joshi </td>
                            <td>Bangladesh</td>
                            <td> Fortis Hospital </td>
                            <td>Kidney Transplant</td>
                            <td>
								<a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash" ></i></a> 
                                <a href="doctor-profile.php"><i class="fa fa-eye"></i></a>
                            </td>
                          </tr>
						  
						    <tr>
						    <td>dr-03</td>
                            <td class="py-1">
                              <img src="assets/images/doctors-icon/dr-rekha-thakur.jpg" class="dr-img-icon" alt="image">
                            </td>
                            <td> Dr. Rekha Thakur </td>
                            <td>kolkatta</td>
                            <td> Fortis Hospital </td>
                            <td>Laparoscopic Surgeon</td>
                            <td>
								<a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash" ></i></a> 
                                <a href="doctor-profile.php"><i class="fa fa-eye"></i></a>
                            </td>
                          </tr>
						  
                            <tr>
                            <td>dr-04</td>
                            <td class="py-1">
                              <img src="assets/images/doctors-icon/dr-annie-arvind.jpg" class="dr-img-icon" alt="image">
                            </td>
                            <td>Dr. Annie Arvind</td>
                            <td>kolkatta</td>
                            <td>Fortis Hospital </td>
                            <td>Heart Disease</td>
                            <td>
								<a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash" ></i></a> 
                                <a href="doctor-profile.php"><i class="fa fa-eye"></i></a>
                            </td>
                          </tr>
						  
						    <tr>
						    <td>dr-05</td>
                            <td class="py-1">
                              <img src="assets/images/doctors-icon/dr-mayank-madan.jpg" class="dr-img-icon" alt="image">
                            </td>
                            <td>Dr. Mayank madan </td>
                            <td>kolkatta</td>
                            <td>Fortis Hospital </td>
                            <td>Gastrointestinal and Bariatric Surgeon</td>
                            <td>
								<a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash" ></i></a> 
                                <a href="doctor-profile.php"><i class="fa fa-eye"></i></a>
                            </td>
                          </tr>
						  
						    <tr>
						    <td>dr-06</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-3.jpg" class="dr-img-icon" alt="image">
                            </td>
                            <td>Roshan kumar </td>
                            <td>kolkatta</td>
                            <td>+91-9999999999 </td>
                            <td><span class="date">5/03/2022</span><span class="time">10:45 AM</span></td>
                            <td>
								<a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash" ></i></a> 
                                <a href="doctor-profile.php"><i class="fa fa-eye"></i></a>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
							<!--/table-->
							
							
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