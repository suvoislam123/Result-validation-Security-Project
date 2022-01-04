<?php 
require_once 'connection.php';
session_start();
if(isset($_POST['login']))
{
	
	echo '<script> alert("Hi")</script>';
	$count=0;
    $sql="SELECT * from teacher where user_name='$_POST[user_email]'|| user_email ='$_POST[user_email]' && user_password ='$_POST[user_password]'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    if($count == TRUE)
    {
    	$sql="SELECT * from teacher where user_name='$_POST[user_email]'|| user_email='$_POST[user_email]' && user_password ='$_POST[user_password]'";
    	$result = mysqli_query($con,$sql);
    	$res = mysqli_fetch_assoc($result);
    	$_SESSION['login_user']= $res['user_name'];
    	$_SESSION['email']=$res['user_email'];
    	$_SESSION['id']=$res['user_id'];
    	$_SESSION['password']=$res['user_password'];
    	header("location: teacher_dashboard.php");
    }
    else{?>
    	<script type="text/javascript">
    		alert("Email and password dont matched");

    	</script>
    	<?php
    	


    }



}
?>