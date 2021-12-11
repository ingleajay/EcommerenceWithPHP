<?php
include "Db_conn.php";
if($conn)
{
	$Email=$_POST['email2'];
	$mobileno=$_POST['phone'];
	$pass1=$_POST['password1'];
	$pass2=$_POST['password2'];
	$id=0;
	if($Email == '' || $mobileno == '' || $pass1 == '' || $pass2 == '')
	{
		echo "incomplete credential";
		exit;
	}
	else
	{
			if($pass1 == $pass2)
			{
	    		$query = "INSERT INTO signup values($id,'$Email',$mobileno ,'$pass1' )";
				$exec_query = mysqli_query($conn,$query) or die(mysqli_error($conn));
				if($exec_query)
					echo "
                    <script>
                    alert('You Register sucessfully!!');
                    window.location.href='LoginSystem.php';
                    </script>
                    ";
					// header("Location:LoginSystem.php"); // Redirecting to other page
				}
				else
				{
					echo "Error";
				}
						
			
			}
		
}


?>

<!-- ".md5($pass1)." -->