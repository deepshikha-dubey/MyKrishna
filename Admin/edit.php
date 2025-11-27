
<?php require_once('include/top.php'); ?><body>

<?php
    include('connect.php');
	 $edit_id= @$_GET['edit'];
	 $query = "SELECT * FROM krishna where ID ='$edit_id'";
	 
   $run= mysqli_query($conn, $query); 
   while ($row= mysqli_fetch_array($run)){
 $edit_id1= $row['ID'];
  $title= $row['Title'];
   $image= $row['Image'];
	 $content=$row['Description'];
	  
 ?>
<div class="container">

<div class="row">
<div class="col-md-3">
<nav class="navbar navbar-default">
<ul class="nav nav-stacked">
<li><h4>Manage Content </h4></li> 

<li><a href = "admin.php?view=view">View Page </a></li>
<li><a href = "insertpost.php">Insert New Post</a></li>
<li><a href = "krishnakathapost.php">Insert New Krishna Story</a></li>
<li><a href ="logout.php">Logout </a></li>
<li><a href ="admin.php?insert=insert"></a></li>
</ul>
</nav>
</div><!--end of col-md-3-->

<div class="col-md-8">

<div class="row">
<div class="col-md-12">
  <h3 class="page-header">Edit Post here!</h3>
  <form method="post" action="edit.php?edit_form=<?php echo $edit_id; ?>" enctype="multipart/form-data">
<div class="form-group">
<div class="row">
<label class="col-md-3 label-control">Post Title: </label>
<div class="col-md-9">
 <input type="text" class="form-control" name="post_title" value= "<?php echo $title;?>">
 </div>
 </div>
</div>
<div class="form-group">
<div class="row">
<label class="col-md-3 label-control">Post Image: </label>
<div class="col-md-9">
 <input type="file" name="image" class="form-control">
<img src="../Images/<?php echo $image; ?>" width="60" height="60">
 </div>
 </div>
</div>
<div class="form-group">
<div class="row">
<label class="col-md-3 label-control">Post Description: </label>
<div class="col-md-9">
 <textarea type="textarea" class="form-control" rows="5" placeholder="Description" name="post_content">
 <?php echo $content;?></textarea>
 </div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-offset-2 col-md-10">
 <button type="submit" class="btn btn-success" name="update"> Update Now</button>
 </div>
</div>
</div>
<?php } ?>
</form>
</div><!-- end of col-md-12-->
</div><!--end of row-->
</div><!--end of col-md-8-->
</div><!-- end of container -->

<footer class=" navbar navbar-inverse">
  <div class="navbar-text">
   Hare Krishna! This website created by Deepshikha in 2018 &copy; 
   </div>
</footer>
<?php 
   
    if(isset($_POST['update']))
	{
	   $update_id = $_GET['edit_form'];
	   $post_title = $_POST['post_title'];
	   $post_des = $_POST['post_content'];
	   $post_image = $_FILES['image']['name'];
	   $post_image_type = $_FILES['image']['type'];
	   $post_image_size = $_FILES['image']['size'];
	   $image_tmp = $_FILES['image']['tmp_name'];
	   
	   move_uploaded_file($image_tmp,"../Images/$post_image");
	   
	   $update_query = "UPDATE `krishna` SET Title ='$post_title', Image ='$post_image', Description='$post_des'
	   where ID =$update_id";
	    if(mysqli_query($conn, $update_query))
		{
		  header('location:admin.php?updated=Post has been updated..');
		  }else{
		  echo "<script> alert('Oops something wrong..')</script>";
		  
		}
	}
?>
</body>
</html>
