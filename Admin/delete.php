<?php 

     include('connect.php');
	  $delete_id = $_GET['del'];
	 $delete_query = "Delete from krishna where ID = '$delete_id'";
	 if (mysqli_query($conn, $delete_query)){
	 
	   echo "<script>window.open('admin.php?Deleted = A post has been deleted....','_self')</script>'";
	   }

?>