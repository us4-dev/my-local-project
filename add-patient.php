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
	 
	 
  <!--<script  src="https://code.jquery.com/jquery-2.1.0.min.js"  crossorigin="anonymous"></script>-->
 
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
		<form class="add-patient-forms" action="javascript:void();" method="post">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-4">
                  <h3 class="form-title mb-3">Treatment Infomation</h3>
				                 
                      <div class="form-group row">
                         <div class="col-sm-12">
                           <select class="form-control">
                            <option>Treatment</option>
                            <option>Spine Surgery</option>
                            <option>Heart Transplant</option>
                            <option>Skull Base Surgery</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                          <label>Age:</label>
						                <input type="date" class="form-control" id="dateofbirth" name="dob">
						                <input type="text" class="form-control" placeholder="Age" disabled id="age" name="age">
                        </div>
							
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12">
							                <label>Marital Status:</label>
                              <label><input type="radio" name="optionsRadios" id="optionsRadios1" checked=""> Married</label>
                              <label><input type="radio" name="optionsRadios" id="optionsRadios2"  > Unmarried</label>
                        
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <textarea type="text" class="form-control" placeholder="Write Your medical conditions....."></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                                  <div class="col-sm-12">
                        <label>Upload reports:</label>
                          <input type="file" class="form-control">
                        </div>
                      </div>
                    
                    <button class="moreOption" id='click'>Add - Hospital/Doctors (optional)</button>
                    <div id="add_more_option">
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
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <select class="form-control">
                                <option>Doctor</option>
                                <option>Dr. Saurabh singh</option>
                                <option>Dr. Amit singh</option>
                                <option>Dr. preeti kaur</option>
                                </select>
                            </div>
                          </div> 
                    </div>     
                      <!--testing-->
                   
                      <div class="form-group row">
                            <div class="col-sm-12">
                                <div id="attendant" class="attendant_show">
                                      <div class="title_attendant">Add Attendant</div>
                                      <a href="javascript:void();" class="remove_field"><i class="fa fa-close" aria-hidden="true"></i></a> 
                                      <div class="form-group row">
                                          <div class="col-sm-12">
                                          <input type="text" class="form-control" id="patientname" placeholder="Patient name">
                                          </div>
                                      </div>

                                    <div class="form-group row">
                                      <div class="col-sm-12">
                                        <input type="text" class="form-control" id="passport-number" placeholder="Enter Passport Number">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-sm-12 text-black">
                                        <label>Attach passport image:</label>
                                        <input type="file" class="form-control" id="passport-file" placeholder="Attach passport image">
                                      </div>
                                    </div>
                                
                                </div>

                            </div>
                      </div>

                      
                    <button id="Addbutton" onlick="attendantList()"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add attendant</button>
    

                    <div class="form-group" style="margin-top:8px;"><button class="moreOption" id='click2'>Donor Details (optional)</button></div>
                    <div id="add_more_option2">
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <input type="text" class="form-control" id="donorname" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <input type="text" class="form-control" id="donorpassportnumber" placeholder="Enter Passport Number">
                            </div>
                          </div>
                          <div class="form-group row">
                               <div class="col-sm-12 text-black">
                                  <label>Attach passport image:</label>
                                   <input type="file" class="form-control" id="donor-passport-file" placeholder="Attach passport image">
                               </div>
                          </div>
                          <div class="form-group row">
                               <div class="col-sm-12">
                               <input type="text" class="form-control" id="donorage" placeholder="Age">
                               </div>
                          </div>
                          <div class="form-group row">
                               <div class="col-sm-12">
                                    <select class="form-control">
                                    <option>Country</option>
                                    <option>India</option>
                                    <option>Bangladesh</option>
                                   </select>
                               </div>
                          </div>
                          <div class="form-group row">
                               <div class="col-sm-12">
                               <input type="text" class="form-control" id="donorrelation" placeholder="Relation with patient">
                               </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-sm-12 text-black">
                                <label><input type="radio" name="optionsRadios" id="optionsRadios1" value="" checked=""> Male</label>
                                <label><input type="radio" name="optionsRadios" id="optionsRadios2" value=""> Female</label>
                                <label><input type="radio" name="optionsRadios" id="optionsRadios2" value=""> Other</label>
                              </div>
                        </div>
                    </div>   
                    <style>
                      #attendant{display:none;}
                      .moreOption{color:#006a4e;border:none;background:none;}
                      .title_attendant{font-weight:600; font-size:16px;}
                      .remove_field{height:60px;height: 40px;display: block;text-align: right;}
                      .remove_field i{color:#006a4e; font-size:20px;}
                      #Addbutton{border:none;background:none;color:#006a4e;}
                      .attendant_show{animation: 1s ease-out 0s 1 slideInFromLeft; background:#fff;}
                      @keyframes slideInFromLeft {
                          0% {
                            transform: translateY(-15%);
                          }
                          100% {
                            transform: translateX(0);
                          }
                        }
                        #add_more_option, #add_more_option2{display:none;}
                      </style>
                      <script>

                          document.getElementById('Addbutton').onclick = attendantList;
                          var i = 0;
                          var original = document.getElementById('attendant');

                          function attendantList() {
                              var clone = original.cloneNode(true);
                              clone.id = "attendantListForm" + ++i; 
                              original.parentNode.appendChild(clone);
                          }
                          $(document).on("click",".remove_field",function(){
                              $(this).parent().remove();
                          });

                        </script>
                          
                          
                           <script>
                                $('#click').click(function()
                                  {   
                                      $("#add_more_option").toggle();     
                                  });
                                  $('#click2').click(function()
                                  {   
                                      $("#add_more_option2").toggle();     
                                  });
                         
                        </script>
                      <!--/testing-->
                   				  
                </div>
              </div>
			  
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-4">
                  <h3 class="form-title mb-3">Contact details</h3>
				  
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="patientname" placeholder="Patient name">
                        </div>
                      </div>
                      <div class="form-group row">
                         <div class="col-sm-12">
                          <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                          <input type="text" class="form-control" id="mobno" placeholder="Mobile number">
                        </div>
                      </div>
                      <div class="form-group row">
                         <div class="col-sm-12">
                          <input type="text" class="form-control" id="passport-number" placeholder="Enter Passport Number">
                        </div>
                      </div>
                      <div class="form-group row">
                         <div class="col-sm-12 text-black">
                           <label>Attach passport image:</label>
                          <input type="file" class="form-control" id="passport-file" placeholder="Attach passport image">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12 text-black">
                          
                              <label><input type="radio" name="optionsRadios" id="optionsRadios1" value="" checked=""> Male</label>
                              <label><input type="radio" name="optionsRadios" id="optionsRadios2" value=""> Female</label>
                        
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <textarea type="text" class="form-control" placeholder="Address"></textarea>
                        </div>
                      </div>
					  <div class="form-group row">
                        <div class="col-sm-12 text-black">
							<label>Upload photo:</label>
                          <input type="file" class="form-control">
                        </div>
                      </div>
                     <!-- <button type="submit" class="btn btn-primary me-2">Add Patient</button>-->
                      <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg show-modal" data-toggle="modal" data-target="#myModal">
                  Add patient
                </button>
                  
                     
                </div>
              </div>
			  
            </div>
          </div>
        </div>
      </div>
 
            </form>
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