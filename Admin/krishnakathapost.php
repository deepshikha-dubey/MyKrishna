
<?php require_once('include/top.php'); ?>

<body>
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
  <h3 class="page-header">Insert New Krishna Story!</h3>
  <div class="row">
  <div class="col-md-12">
     <form method="post" action="#" enctype="multipart/form-data">
<div class="form-group">
<div class="row">
<label class="col-md-2 label-control">Post Title: </label>
<div class="col-md-10">
 <input type="text" class="form-control" name="post_title">
 </div>
 </div>
</div>
<div class="form-group">
<div class="row">
<label class="col-md-2 label-control">Post Image: </label>
<div class="col-md-10">
 <input type="file" name="image" class="form-control">
 </div>
 </div>
</div>
<div class="form-group">
<div class="row">
<label class="col-md-2 label-control">Post Description: </label>
<div class="col-md-10">
 <textarea type="textarea" class="form-control" rows="5" placeholder="Description" name="post_content"></textarea>
 </div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-offset-2 col-md-10">
 <button type="submit" class="btn btn-success" name="sub"> Submit</button>
 </div>
</div>
</div>
</form>
</div><!-- end of col-md-12-->
</div><!--end of row-->
</div><!--end of col-md-8-->
</div><!-- end of container -->

<footer class=" navbar navbar-inverse">
  <div class="navbar-text">
   Hare Krishna reserved in 2018 &copy; 
   </div>
</footer>

<?php
include("Connect.php");

if(isset($_POST['sub'])){

 $title = $_POST['post_title'];
 $image_name = $_FILES['image']['name'];
 $image_size = $_FILES['image']['size'];
 $image_type = $_FILES['image']['type'];
 $image_tmp = $_FILES['image']['tmp_name'];
 $target_dir="../krishnakatha/";
 $target_file=$target_dir.basename($_FILES["image"]["name"]);
 $uploadOk=1;
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
 
   if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
    echo "The File" . basename($_FILES["image"]["name"]). "Has been published";
	}
	else {
	  echo "Sorry Error:";
	}	
 $content = $_POST['post_content'];

  if($title == '' or $content == ''){
  echo "<script>alert('Any Filed is Empty')</script>";
  exit();
  }
  $query = "INSERT INTO krishnakatha(Title,Image, Description) 
       VALUES ('$title','$image_name','$content')";
   if(mysqli_query($conn, $query)){  
   echo "<script>window.open('admin.php?published=Post has been posted','_self')</script>";
   
  }
  } 
?>
</body>
</html>