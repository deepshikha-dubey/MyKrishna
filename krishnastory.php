
  <?php require_once('include/header.php'); ?>
<div class="container">   
 <table class="table" style="border:1px white solid;">
 <tr><th colspan="7" style="background:#f20068; color:white; font-size:30px;">View all Krishna Story</th></tr> 
 <tr><th>Post_Id</th>
 <th>Post_Title</th>
 <th>Post_Image</th>
 <th>Post_Content</th>
 <th>View</th>
 </tr>
<?php
include("connectdb.php");
  $i=1; 
  $query = "SELECT * FROM krishnakatha ORDER BY 1 DESC"; 
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
<td><center><img src="krishnakatha/<?php echo $image ; ?>" height="80" width="80"></center></td>
<td><?php echo $content; ?> </td>
<td><a href="krishnakatha.php?id=<?php echo $id; ?>">View</a></td>
</tr>
<?php }?>
</table>

</div>

  <?php require_once('include/footer.php'); ?>

</div>

 <div class="container">
<?php /*
  if($msg!='') echo"<p>$msg</p>" ; */
 ?>
</div> 
</div>
