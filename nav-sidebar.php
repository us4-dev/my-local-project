<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <!--<li class="nav-item nav-category">Suresh-Testing</li>-->
            <li class="nav-item">
              <a class="nav-link" href="index.html">
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
			<li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#doctors-patients" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="fa fa-users"></i></span>
                <span class="menu-title">Patients </span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="doctors-patients">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="all-patients.php">All Patients </a></li>
                  <li class="nav-item"> <a class="nav-link" href="add-patient.php">Add Patient </a></li>
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
                <span class="menu-title">Patient Report</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="tele-consultancy.php">
                <span class="icon-bg"><i class="fa fa-file-text"></i></span>
                <span class="menu-title">Tele Consultancy</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="get-esitmate.php">
                <span class="icon-bg"><i class="fa fa-money"></i></span>
                <span class="menu-title">Get Esitmate</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#dropdown-visit-services">
                <span class="icon-bg"><i class="fa fa-plane"></i></span>
                <span class="menu-title">Pre Visit Services</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="dropdown-visit-services">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="send-pre-intimation.php">Send pre-Intimation</a></li>
                  <li class="nav-item"> <a class="nav-link" href="visa-invitation.php">Request visa invitation</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Schedule pick-up</a></li>
				        </ul>
              </div>

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