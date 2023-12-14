<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                   <?php $query=mysqli_query($bd, "select fullName from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
              	  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
              	  	
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php">Profile</a></li>
                          <li><a  href="change-password.php">Change Password</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="register-complaint.php" >
                          <i class="fa fa-book"></i>
                          <span>Hostel Complaint</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-history.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Complaint History</span>
                      </a>
                      
                  </li>

                  <li class="sub-menu">
                      <a href="salon_booking.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Salon Booking</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="sports_booking.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Sports Slot Booking</span>
                      </a>
                  </li>



                  <!-- Add new navigation links for salon booking and sports slot booking -->
                  <!-- <li>
                        <a href="http://localhost/Complaint Management System/salon_booking.php">Salon Booking</a>
                    </li> -->
                    <!-- <li>
                        <a href="http://localhost/Complaint Management System/sports_booking.php">Sports Slot Booking</a>
                    </li> -->
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>