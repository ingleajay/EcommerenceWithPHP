<?php 
include "Signin.php";
?>
<!DOCTYPE >
<html lang="en">
<head>
    <title>Shoeslly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/Login.css"/>
    <link rel="stylesheet" type="text/css" href="../font/css/all.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/Password_view.js"></script>
    <script src="../js/validate.js"></script>
</head>
<body>
<div id="container"  >
    <img alt="logo" src="../img/logo.jpg" id="logo">
    <div class="Signin-container " id="one">
        <form action="" onsubmit="return validation1()"  name="form1" method="post" id="login_form">
        <h1>Login to Shoeslly</h1>
        <div class="input-container" >
            <i class="fa fa-user icon" aria-hidden="true"></i>
            <input type="text" placeholder="Email" name="useres" id="email1" />
        </div>
        <span id="emailId"></span>
        <div class="input-container">
            <i class="fa fa-key icon" aria-hidden="true"></i>
            <i class="fa fa-eye eyeview " aria-hidden="true" id="eyes1" onclick="view()"></i>
            <input type="password" placeholder="Password" id="pwd1" name="passes"  />
        </div>
        <span id="passId"></span>
        <button type="submit" name="submit">
        Sign In
        </button>
        <div class="linking1">
        <a href="#forgot" class="recover link1" >Forgot password ?</a>
        <a href="#register" class="create_acc link2" >Create Account</a>
        </div>
        </form>
    </div>
    <div class="Signup-container" id="two">
        <form action="Signup.php" onsubmit="return validation2()" name="form2" class="form2" method="post"> 
        <h1 class="signhead">Signup with Shoeslly</h1>
        <div class="input-container">
            <i class="fa fa-user icon" aria-hidden="true"></i>
            <input type="text" placeholder="Email" name="email2" id="email2"/>
        </div>    
        <span id="email2Id"></span>
        <div class="input-container">   
            <i class="fa fa-phone icon" aria-hidden="true"></i> 
            <input type="text" placeholder="Mobile No" name="phone" id="mobileno" />
        </div>
        <span id="phoneId"></span>
        <div class="input-container">
            <i class="fa fa-key icon" aria-hidden="true"></i>
            <input type="password" placeholder="Password" id="pwd2" name="password1" />
            <i class="fa fa-eye eyeview " aria-hidden="true" id="eyes2" onclick="view()"></i>
        </div>
        <span id="pass1Id"></span>
        <div class="input-container">
            <i class="fa fa-key icon" aria-hidden="true"></i>
            <input type="password" placeholder="Confirm Password" id="pwd3" name="password2" />
            <i class="fa fa-eye eyeview " aria-hidden="true" id="eyes3" onclick="view()"></i>
        </div>
        <span id="pass2Id"></span>
        <button class="butReg" type="submit">Register</button>
        <div class="linking2">
        <p class="para">Already have account?
        <a href="#login" class="login_in link3 " >Login</a>
        </p>
        </div>
        </form>
    </div>
        <div class="Forgot-container " id="three">
        <form action="Forgot.php" onsubmit="return validation3()" name="form3" method="post">
        <h1 class="forhead">Forgot Password </h1>
        <div class="input-container">
            <i class="fa fa-user icon" aria-hidden="true"></i>
            <input type="text" placeholder="Email" name="email" id="email3"  />
        </div>        
        <span id="email3Id"></span>

        <button name="submit" type="submit">send email</button>
        <a href="#login" class="link4" >Login</a>
        </form>
    </div>

</div>
    
<script src="../js/MultiStepForm.js"></script>
 </body>
</html>













