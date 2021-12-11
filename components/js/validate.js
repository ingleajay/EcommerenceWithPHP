function validation1(){
    var email1 = document.getElementById('email1').value;
    var pass1 = document.getElementById('pwd1').value;
    var passw = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;


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
    
    if(pass1=="" || pass1==null){
        document.getElementById('passId').innerHTML="*Please Enter  Password";
        return false;
    }
    if((pass1.length<=6)|| (pass1.length>20)){
        document.getElementById('passId').innerHTML="*mininum six character";
        return false;
    }
    if(!(passw.test(pass1))){
        document.getElementById('passId').innerHTML="Enter Valid Password"
        return false;
    }
   
}

 function validation2(){
    var email2 = document.getElementById('email2').value;
    var phone = document.getElementById('mobileno').value;
    var pass_1 = document.getElementById('pwd2').value;
    var pass_2 = document.getElementById('pwd3').value;
    var pass_w = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;

    if(email2=="" || email2==null){
        document.getElementById('email2Id').innerHTML="*Please Enter Your Email";
        return false;
    }
    
    if(email2.indexOf('@') <= 0) {
        document.getElementById('email2Id').innerHTML="*Enter Valid @ Position";
        return false;
    }
    if((email2.charAt(email2.length-4)!='.')&&(email2.charAt(email2.length-3)!='.')){
        document.getElementById('email2Id').innerHTML="*Enter Valid Dot Position ";
        return false;
    }

    if(phone=="" || phone==null){
        document.getElementById('phoneId').innerHTML="*Please Enter Phone no";
        return false;
    }
    if(isNaN(phone)){
        document.getElementById('phoneId').innerHTML="*Enter Numbers Only";
        return false;

    }
    if(phone.length!=10){
        document.getElementById('phoneId').innerHTML="*Enter 10 digits";
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

function validation3(){
    var email3 = document.getElementById('email3').value;

    if(email3=="" || email3==null){
        document.getElementById('email3Id').innerHTML="*Please Enter Your Email";
        return false;
    }
    
    if(email3.indexOf('@') <= 0) {
        document.getElementById('email3Id').innerHTML="*Enter Valid @ Position";
        return false;
    }
    if((email3.charAt(email3.length-4)!='.')&&(email3.charAt(email3.length-3)!='.')){
        document.getElementById('email3Id').innerHTML="*Enter Valid Dot Position ";
        return false;
    }

}
