<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/Reset.css"/>
<link rel="stylesheet" type="text/css" href="../font/css/all.css">
<script src="../js/jquery.min.js"></script>
<title>Reset</title>
</head>
<body>
<div class="reset">
	<h4 align="center">Reset Password</h4>
	<form action="ResetPassword.php" method="post" onsubmit="return validate()" >
	<div class="input-container">
            <input type="text" placeholder="Enter Your email for verfication" name="useres" id="email3"  />
    </div>        
    <span id="emailId"></span>
	<div class="input-container">
		<input type="password" placeholder="New Password" id="pass_r1" name="password_1"><br/><br/>
		<i class="fa fa-eye eyeviews " aria-hidden="true" id="eyes_r1" onclick="View1()"></i>
	</div>
	<span id="pass1Id"></span>
	<div class="input-container">
		<input type="password" placeholder="Confirm Password" id="pass_r2" name="password_2"><br/><br/>
		<i class="fa fa-eye eyeviews" aria-hidden="true" id="eyes_r2" onclick="View1()"></i>
	</div>
	<span id="pass2Id"></span>
    <div>
	<button class="but" name="submit">RESET YOUR PASSWORD</button>
    </div>
	</form>
</div>
<script src="../js/Reset_Password_view.js"></script>
<script type="text/javascript">
	function validate(){
    var email1 = document.getElementById('email3').value;
    var pass_1 = document.getElementById('pass_r1').value;
    var pass_2= document.getElementById('pass_r2').value;
    var pass_w = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;

    if(email1=="" || email1==null){
        document.getElementById('emailId').innerHTML="*Please Enter Your Email";
        return false;
    }
    
    if(email1.indexOf('@') <= 0) {
        document.getElementById('emailId').innerHTML="*Enter Valid @ Position";
        return false;
    }
    if((email1.charAt(email1.length-4)!='.')&&(email1.charAt(email1.length-3)!='.')){
        document.getElementById('emailId').innerHTML="*Enter Valid Dot Position ";
        return false;
    }
    
    if(pass_1=="" || pass_1==null){
        document.getElementById('pass1Id').innerHTML="*Please Enter Password";
        return false;
    }

    if(pass_2=="" || pass_2==null){
        document.getElementById('pass2Id').innerHTML="*Please Confirm password";
        return false;
    }
    if((pass_1.length<=6)|| (pass_1.length>20)){
        document.getElementById('pass1Id').innerHTML="*mininum six character";
        return false;
    }
    if(!(pass_w.test(pass_1))){
        document.getElementById('pass1Id').innerHTML="Enter Valid Password";
        return false;
    }
    if(pass_1!=pass_2){
        document.getElementById('pass2Id').innerHTML="*Password Not Matching";
        return false;

    }
}

</script>
</body>
</html>