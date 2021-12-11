<?php
session_start();
include "Db_conn.php";

if(isset($_POST['submit'])){
//Define $user and $pass
$user=$_POST['useres'];
$pass=$_POST['passes'];

$db = mysqli_select_db($conn, "ecommerce");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT * FROM signup WHERE pass1= '$pass' AND Email='$user' ")or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($query);
if ($row['Email'] != $user and $row['pass1']!==$pass) {
                echo "
                <script>
                    alert('Invalid data!!try again');
                    window.location.href='LoginSystem.php';
                    </script>
                   ";
}
$rows = mysqli_num_rows($query);
if($rows >0){
$_SESSION['name']=$user;	
header("Location: index.php"); // Redirecting to other page
}
mysqli_close($conn); // Closing connection

}
?>