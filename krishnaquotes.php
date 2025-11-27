
  <?php require_once('include/header.php'); ?>
<div class="container">   
 <table class="table" style="border:1px white solid;">
 <tr><center><th colspan="7" style="background:#f20068; color:white; font-size:30px;">View all Post</th></center></tr> 
 <tr><th>Post_Id</th>
 <th>Post_Title</th>
 <th>Post_Image</th>
 <th>Post_Content</th>
 <th>View</th>
 </tr>
<?php
include("connectdb.php"); // Include the database connection

$i = 1;
$query = "SELECT * FROM krishna ORDER BY 1 DESC";
$run = mysqli_query($conn, $query); // Execute the query

while ($row = mysqli_fetch_assoc($run)) {
    $id = $row['ID'];
    $title = $row['Title'];
    $image = $row['Image'];
    $content = substr($row['Description'], 0, 80);
    // Rest of your code...

?>
<tr align="center">
<td><?php echo $i ++;?> </td>
<td><?php echo $title; ?> </td>
<td><center><img src="Images/<?php echo $image ; ?>" height="80" width="80"></center></td>
<td><?php echo $content; ?> </td>
<td><a href="page.php?id=<?php echo $id; ?>">View</a></td>
</tr>
<?php }?>
</table>

</div>


  <?php require_once('include/footer.php'); ?>


</div>

 <div class="container">
<?php /*
  if($msg!='') echo"<p>$msg</p>" ;  */
 ?>
</div>
</div>
