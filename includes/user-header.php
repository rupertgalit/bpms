<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Rowena Salon Management System</a>
       
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
            
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
           
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
          </ul>


          <div class="profile_details_left"><!--notifications of menu start -->
          <ul class="nofitications-dropdown">
            <?php

            $User_id = $_SESSION['login_ses'] ;
            $ret1=mysqli_query($con,"SELECT * from  tblappointment WHERE User_id= 2 " );
            // $ret1=mysqli_query($con,"select ID,Name from  tblappointment where Status=''");
            $num=mysqli_num_rows($ret1);

?>  
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php echo $num;?></span></a>
              
              <ul class="dropdown-menu">
                <li>
                  <div class="notification_header">
                    <h3>You have <?php echo $num;?> new notification</h3>
                  </div>
                </li>
                <li>
            
                   <div class="notification_desc">


    <?php 
      if($num>0)
      {
          while($result=mysqli_fetch_array($ret1))
          {
              if($result['Status']== "")
              {
    ?>
              <a class="dropdown-item" href="view-appointment.php?viewid=<?php echo $result['ID'];?>">Appointment pending from <?php echo $result['Name'];?> </a><br />
              
    <?php 
              }
              else
              {
     ?>           
              <a class="dropdown-item" href="view-appointment.php?viewid=<?php echo $result['ID'];?>">Appointment approved from <?php echo $result['Name'];?> </a><br />
    <?php
              }
          }
    
      } 
      else 
      {
    ?>
            <a class="dropdown-item" href="all-appointment.php">No New Appointment Received</a>      
    <?php 
      } 
    ?>
                           
                  </div>
                  <div class="clearfix"></div>  
                 </a></li>
                 
                
                 <li>
                  <div class="notification_bottom">
                    <a href="new-appointment.php">See all notifications</a>
                  </div> 
                </li>
              </ul>
            </li> 
          
          </ul>
          <div class="clearfix"> </div>
        </div>
        </div>
      </div>
    </nav>