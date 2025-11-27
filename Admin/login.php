<?php
  SESSION_START();
?>
<html>
<head>
<title>Admin Login</title>
<link rel="icon" type="image/png" href="../images/icon.png">
</head>
</head>
<body style="background:url('Images/pict.jpg');">
     <form action="login.php" method="post" style="margin-top:100px;">
	      <table align="center" width="400" height="200" style="border:1px solid maroon;">
		    </tr><th colspan="2">Admin Login</th></tr>
	        <tr><td align="right">User Name:</td>
		    <td><input type="text" name="user_name"></td></tr>
		    <tr><td align="right">Password:</td>
		    <td><input type="password" name="user_pass"></td></tr>
		    <tr><td colspan="2" align="center">
			<input type="submit" name="login" value="Login"/></tr>
	 </table>
	 </form>
</body>
</html>
<?PHP
 include('connect.php');
    if(isset($_POST['login'])){
	
	$user_name=$_POST['user_name'];
	$user_pass=$_POST['user_pass'];
	
	$login_query = "SELECT  * FROM admin where Name = '$user_name' AND Password='$user_pass'";
	
	 $run = mysqli_query( $conn, $login_query);
	 
	 if(mysqli_num_rows($run)>0){
	 $_SESSION['user_name']=$user_name;
	   echo "<script> window.open('admin.php','_self')</script>";
	       }
	  else {
	     echo "<script>alert ('User name and Password is not correct');</script>";
	  }}
?>