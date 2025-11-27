<?php
   SESSION_START();
   if(!isset($_SESSION['user_name'])){
   header('location:login.php');
   }
    else {
   
?>


<?php  require_once('include/top.php'); ?>
<div class="row">
<div class="col-md-3">
<?php require_once('include/sidebar.php'); ?>
</div><!--end of col-md-3-->
<div class="col-md-9">


   <h3 class="page-header">You can manage all of your websites content here!</h3>
  <?php  echo @$_GET['deleted']; ?> 
  
  <?php
      if(isset($_GET['insert'])){
	  include('insertpost.php');
	  }
  
  ?>
  
  <?php if(isset($_GET['view'])){ ?>
   
 <table class="table" style="border:1px white solid;">
 <tr><center><th colspan="7" style="background:#f20068; color:white; font-size:30px;">View all Post</th></center></tr> 
 <tr><th>Post_Id</th>
 <th>Post_Title</th>
 <th>Post_Image</th>
 <th>Post_Content</th>
 <th>Edit</th>
 <th>Delete</th>
 </tr>
<?php
include("connect.php");
  $i=1; 
  $query = "SELECT * FROM krishna ORDER BY 1 DESC"; 
    $run= mysqli_query($conn, $query);
 while ($row= mysqli_fetch_array($run)){
 $id= $row['ID'];
  $title= $row['Title'];
   $image= $row['Image'];
	 $content=substr($row['Description'],0,80);
?>
<tr align="center">
<td><?php echo $i ++;?> </td>
<td><?php echo $title; ?> </td>
<td><center><img src="../Images/<?php echo $image ; ?>" height="80" width="80"></center></td>
<td><?php echo $content; ?> </td>
<td><a href="edit.php?edit=<?php echo $id;?>">Edit</a></td>
<td><a href="delete.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>
<?php }} ?>
</table>

</div>
</div>

<footer class=" navbar navbar-inverse">
  <div class="navbar-text">
   Hare Krishna reserved in 2018 &copy; 
   </div>
</footer>

<?php
  }
?>
</div>

 <div class="container">
<?php
  if($msg!='') echo"<p>$msg</p>" ; 
 ?>
</div>
</body>
</html>