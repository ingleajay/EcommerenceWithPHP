<?php
include "Db_conn.php";
if(isset($_POST['submit'])) {
    $email = $_POST['useres'];
    $password_1 =  $_POST['password_1'];
    $password_2 =  $_POST['password_2'];  
    $user_check_query1 = "SELECT * FROM signup WHERE  Email='$email' ";
	$result1 = mysqli_query($conn, $user_check_query1);
	$user1 = mysqli_fetch_assoc($result1);
	// if($email == '' || $password_1 == '' || $password_2 == '')
	// {
	// 	echo "incomplete credential";
	// }
    if ($user1['Email'] != $email) {
                echo "
                <script>
                    alert('Username is not exist!!try again');
                    window.location.href='Reset.php';
                    </script>
                   ";	}
    if($password_1 == $password_2)
    {   
        // $query="SELECT * FROM singup where Email='$email'";
        // $query_check=mysqli_query($conn,$query);
        if($result1){
            if(mysqli_num_rows($result1) == 1){
                $password = md5($password_1);
                $query1 = "UPDATE signup SET pass1='$password_1' WHERE  Email='$email' ";
                $query_run=mysqli_query($conn,$query1);
                if($query_run){
                    echo "
                    <script>
                     alert('Your password is update!!Login again');
                     window.location.href='LoginSystem.php';
                     </script>
                     ";
                }
                else
                {
                    //password update
                    echo "
                    <script>
                     alert('Your password is not update!!');
                     window.location.href='Reset.php';
                     </script>
                     ";
                }
    		
    		}
    	}
    }
}	



?>