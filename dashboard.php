<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edhacare</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
      
   <!-- <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">-->
     <!-- Vendor -->
  <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css" />
  <!-- Vendor -->
    <link rel="stylesheet" href="assets/css/style.css">
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
              <div class="col-md-12">
               
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    
                    <div class="row">
              <div class="col-lg-8 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Booked Appointment</h4>
                   
                    <div class="table-responsive">
                      <table class="table table-striped-">
                        <thead>
                          <tr style="background:#ddd;">
							<th>P-ID</th>
							<th>image</th>
                            <th> Patient name </th>
                            <th> Assigned Doctor </th>
                            <th> Date </th>
                            <th> Diseases </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
							<td>P-01</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-1.jpg" alt="image">
                            </td>
                            <td> Herman Beck </td>
                            <td>
                             Dr. Saurabh Chandra
                            </td>
                            <td> May 15, 2015 </td>
                            <td> Spine Surgery</td>
							<td><a href="#"><i class="fa fa-edit"></i></a>  <a href="#"><i class="fa fa-trash" ></i></a></td>
                          </tr>
						  
						  <tr>
							<td>P-02</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-2.jpg" alt="image">
                            </td>
                            <td> Herman Beck </td>
                            <td>
                             Dr. Saurabh Chandra
                            </td>
                            <td> May 15, 2015 </td>
                            <td> Spine Surgery</td>
							<td><a href="#"><i class="fa fa-edit"></i></a>  <a href="#"><i class="fa fa-trash" ></i></a></td>
                          </tr>
						  
						  <tr>
							<td>P-03</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-3.jpg" alt="image">
                            </td>
                            <td> Herman Beck </td>
                            <td>
                             Dr. Saurabh Chandra
                            </td>
                            <td> May 15, 2015 </td>
                            <td> Spine Surgery</td>
							<td><a href="#"><i class="fa fa-edit"></i></a><a href="#"><i class="fa fa-trash" ></i></a></td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">New Patient</h4>
                   
                    <div class="table-responsive">
                      <table class="table table-striped-">
                        <thead>
                          <tr style="background:#ddd;">
							<th>P-ID</th>
							<th>image</th>
                            <th> Patient name </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
							<td>P-01</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-3.jpg" alt="image">
                            </td>
                              <td>Airi Satou<br><span class="description">Dr. sk jain</span></td>
                          
							<td><a href="#"><i class="fa fa-edit"></i></a>  <a href="#"><i class="fa fa-trash" ></i></a></td>
                          </tr>
						  
						    <tr>
							<td>P-02</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-3.jpg" alt="image">
                            </td>
                              <td>jain albert<br><span class="description">Dr. sk jain</span></td>
                          
							<td><a href="#"><i class="fa fa-edit"></i></a>  <a href="#"><i class="fa fa-trash" ></i></a></td>
                          </tr>
						  
						  <tr>
						  <td>P-03</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-3.jpg" alt="image">
                            </td>
                              <td>Airi Satou<br><span class="description">Dr. sk jain</span></td>
                          
							<td><a href="#"><i class="fa fa-edit"></i></a>  <a href="#"><i class="fa fa-trash" ></i></a></td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
             
             
            </div>
                  
					
                  </div>
                </div>
              </div>
            </div>
			
          </div>
		  
					<div class="row">
                       <div class="col-lg-12 stretch-card">
						<div class="card">
						  <div class="card-body">
							<h4 class="card-title">All Patient</h4>
							<!--table-->
							<div class="table-responsive">
                      <table id="tblContact" class="table table-striped table-bordered"  cellspacing="0">
                        <thead>
                          <tr style="background:#ddd;">
							<th>P-ID</th>
							<th>image</th>
                            <th> Patient name </th>
                            <th> Assigned Doctor </th>
                            <th> Phone number </th>
                            <th> Treatment </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
						  <td>P-01</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-1.jpg" alt="image">
                            </td>
                            <td> Herman Beck </td>
                            <td>
                             Dr. Saurabh Chandra
                            </td>
                            <td> +00-000-000-0000 </td>
                            <td> Spine Surgery</td>
							<td><a href="#"><i class="fa fa-edit"></i></a>  <a href="#"><i class="fa fa-trash" ></i></a></td>
                          </tr>
						  
						  <tr>
						  <td>P-02</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-2.jpg" alt="image">
                            </td>
                            <td> Herman Beck </td>
                            <td>
                             Dr. Saurabh Chandra
                            </td>
                            <td> +00-000-000-0000 </td>
                            <td> Spine Surgery</td>
							<td><a href="#"><i class="fa fa-edit"></i></a>  <a href="#"><i class="fa fa-trash" ></i></a></td>
                          </tr>
						  
						  <tr>
						  <td>P-03</td>
                            <td class="py-1">
                              <img src="assets/images/patient-img/pic-3.jpg" alt="image">
                            </td>
                            <td> Herman Beck </td>
                            <td>
                             Dr. rohit Chandra
                            </td>
                            <td> +00-000-000-0000 </td>
                            <td> Spine Surgery</td>
							<td><a href="#"><i class="fa fa-edit"></i></a>  <a href="#"><i class="fa fa-trash" ></i></a></td>
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