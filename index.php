<?php 

session_start();
error_reporting(0);
include('includes/dbconnection.php');







if(isset($_POST['btn-reg']))
  {
    $user_name  = $_POST['user_name'];  
	  $password   = $_POST['password'];
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone_num  = $_POST['phone_num'];
    $gender     = $_POST['gender'];
    // $staff_name=$_POST['staff_name'];
	// $details=$_POST['details'];
	
     
    $query=mysqli_query($con, "insert into  tbluser(User_name,Password,Name,Email_add,Phone_num,Gender) value('$user_name','$password','$name','$email','$phone_num','$gender')");
    if ($query) {
echo "<script>alert('user has been added.');</script>"; 

// $this->session->set_flashdata('success','Account Type missing, please contact developers.');
echo "<script>window.location.href = 'https://aterowenasalon.online'</script>"; 
 } else {
echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
} }



if(isset($_POST['btn-login']))
  {
    $login_user=$_POST['login_user'];
    $login_password=($_POST['login_password']);
    $query=mysqli_query($con,"select ID from tbluser where  User_name='$login_user' && Password='$login_password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['login_ses']=$ret['ID'];
     header('location:user-dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="css/login-style.css">

</head>









<body>

<!-- <div id="info">
  <h2>CSS Only Slide Login/Registration</h2><br>
  Click the "Sign Up" button to view the registration form.<br><br>
  <p id="credit">Based on a Dribbble by SELECTO</p>
</div> -->

<div id="container">
  
  <!-- Cover Box -->
  <div id="cover">
      <!-- Sign Up Section -->
      <h1 class="sign-up">Hello, Friend!</h1>
      <p class="sign-up">No Account Yet?<br> Create an Account Here!</p>
      <a class="button sign-up" href="#cover">Sign Up</a>
    
      <!-- Sign In Section -->
      <h1 class="sign-in">Welcome Back!</h1>
      <p class="sign-in">To keep connected with us please<br> login with your personal info</p>
      <br>
      <a class="button sub sign-in" href="#">Sign In</a>
 
  </div>
  
  <!-- Login Box -->
  <div id="login">
    <h1>Sign In</h1>
    <br>
    <br>
    <br>
    <br>
    <!-- <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/59/59439.png"></a>
    <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/49/49026.png"></a>
    <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/34/34227.png"></a>
    <p>or use your email account:</p> -->
    <form method="post">
                                        <?php if (isset($_SESSION['success'])): ?>
                                            <h3><?php echo $_SESSION['success']; ?></h3>
                                        <?php endif; ?>
      <input type="text" name="login_user" placeholder="User" autocomplete="off" required><br>
      <input type="password" name="login_password" placeholder="Password" autocomplete="off" required><br>
     
      <!-- <input class="submit-btn" type="submit" value="Sign In" name="btn-login"> -->
      <button type="submit" name="btn-login" class="submit-btn" >Login</button>
      <br><br><br><br><br>
      <a id="forgot-pass" href="admin/index.php">Go to Admin Login</a>
    </form>
  </div>
  
  <!-- Register Box -->
  <div id="register">
    <h1>Create Account</h1>
    <!-- <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/59/59439.png"></a>
    <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/49/49026.png"></a>
    <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/34/34227.png"></a>
    <p>or use your email for registration:</p> -->
    <form method="post">
      <input type="text" name="user_name" placeholder="UserName" autocomplete="off" required="true"><br>
      <input type="password" name="password" placeholder="Password" autocomplete="off" required="true"><br>
      <input type="text" name="name" placeholder="Name" autocomplete="off" required="true"><br>      
      <input type="email" name="email" placeholder="Email" autocomplete="off" reaquired="true"><br>
      <input type="text" name="phone_num" placeholder="Mobile Number" autocomplete="off" required="true"><br>
      <input type="text" name="gender" placeholder="Gender" autocomplete="off" required="true"><br>
      
      <button type="submit" name="btn-reg" class="submit-btn" >Register</button>
       <!-- <input class="submit-btn" name="btn-reg" type="submit" value="Sign Up" > -->
    </form>
  </div>
  
</div> <!-- END Container -->


</body>