<!DOCTYPE html>
<html lang="en">

<head>


<style>

@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900");

* {
  margin: 0;
  padding: 0;
}

body {
  /* background: #f0f4f3; */
  background-image: url(images/image_1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Roboto", sans-serif;
}

.button {
  border: 1px solid #fff;
  border-radius: 20px;
  color: #fff;
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 1px;
  padding: 15px 60px;
  text-decoration: none;
  text-transform: uppercase;
}

input[type="email"],
input[type="password"],
input[type="text"] {
  /* background: #f4f8f7; */
    background:#FFE6F9;
  border: none;
  font-weight: 300;
  margin: 5px;
  padding: 10px;
  width: 280px;
  border-radius: 10px;
 
}

.submit-btn {
  border: none;
  border-radius: 25px;
  color: #fff;
  cursor: pointer;
  font-size: 11px;
  letter-spacing: 1px;
  margin-top: 20px;
  padding: 15px 50px;
  text-transform: uppercase;
}

#login .submit-btn {
  background: #FF96FC;
}

#register .submit-btn {
  background: #FF96FC;
}

#container {
  background: #ededed;
  border-radius: 10px;
  height: 550px;
  margin: 5% auto;
  overflow: hidden;
  width: 1000px;
}

.social-login {
  border: 1px solid #ccc;
  border-radius: 50px;
  height: 15px;
  padding: 10px;
  width: 15px;
}

#login {
  /* background: #fff; */
  background-image: url(images/bg-2.jpg);
  background-repeat:no-repeat;
  background-size: cover;
  float: left;
  height: 100%;
  position: relative;
  width: 50%;
  text-align: center;
  top: -550px;
  z-index: 1;
}

#register {
  /* background: #fff; */
  background-image: url(images/bg-2.jpg);
  background-repeat:no-repeat;
  background-size: cover;
  float: right;
  height: 100%;
  position: relative;
  width: 50%;
  text-align: center;
  top: -550px;
  z-index: 1;
}

#login h1,
#register h1 {
  padding: 20% 0 25px;
}

#login h1 {
  color: #FF96FC;
}

#register h1 {
  color: #FF96FC;
}

#login p,
#register p {
  font-size: 12px;
  font-weight: 300;
  letter-spacing: 0.3px;
  padding: 20px;
}

#forgot-pass {
  border-bottom: 1px solid #ccc;
  color: #000;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.3px;
  padding: 3px;
  text-decoration: none;
}

#cover {
  /* background: #3aa7b1; */
  background:#FF96C8;

  
  color: #fff;
  height: 550px;
  margin: 0 0 0 50%;
  position: relative;
  text-align: center;
  transition: margin 0.7s, background 0.5s, display 1s, width 1s;
  width: 50%;
  z-index: 5;
}

#cover h1 {
  padding-top: 38%;
}

#cover p {
  font-weight: 300;
  line-height: 22px;
  padding: 30px 45px 40px;
}

.sign-in {
  display: none;
}

.sub {
  position: relative;
  top: -11px;
}

#cover:target {
  /* background: #3aaf9f; */
  background: #FFCE96;
  margin: 0;
}

#cover:target .sign-up {
  display: none;
}

#cover:target .sign-in {
  display: inline-block;
}

#cover:target .login-div {
  width: 35%;
}

#credit {
  color: #999;
  font-size: 14px;
}

#info {
  background: #eaeaea;
  color: #555;
  padding: 20px;
  text-align: center;
}


</style>

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
    <form>
      <input type="email" placeholder="Email" autocomplete="off"><br>
      <input type="password" placeholder="Password" autocomplete="off"><br>
      <a id="forgot-pass" href="#">Forgot your password?</a><br>
      <input class="submit-btn" type="submit" value="Sign In">
    </form>
  </div>
  
  <!-- Register Box -->
  <div id="register">
    <h1>Create Account</h1>
    <br>
    <br>
    <br>
    <!-- <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/59/59439.png"></a>
    <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/49/49026.png"></a>
    <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/34/34227.png"></a>
    <p>or use your email for registration:</p> -->
    <form>
      <input type="text" placeholder="Name" autocomplete="off"><br>
      <input type="email" placeholder="Email" autocomplete="off"><br>
      <input type="password" placeholder="Password" autocomplete="off"><br>
      <input class="submit-btn" type="submit" value="Sign Up">
    </form>
  </div>
  
</div> <!-- END Container -->


</body>