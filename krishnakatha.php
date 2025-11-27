<?php require_once('include/header.php'); ?>

  <script>
  $(document).ready(function(){
   $("#img2").hide();
    $("#p2").click(function(){
        $("#img2").slideToggle("slow");
    });
	});
  </script>
</head>
<body>

 <div class="container content">
   
<div class="row jumbotron" style="background:#fff;">
<div class="col-sm-12" style="padding:10px;">
<?php 
 include('connectdb.php');
 
    $page_id = $_GET['id'];
	$query = "SELECT * FROM krishnakatha where ID = '$page_id'";
      $run = mysqli_query($conn, $query);
	  while($row=mysqli_fetch_array($run)){
	  $title = $row['Title']; 
      $image = $row['Image'];
       $content = $row['Description'];
	   
?>
<h2 style="color:#f20068;"><?php echo $title; ?></h2>
<center><img src="krishnakatha/<?php echo $image ; ?>" class="img-responsive" width="500"></center><br/>
<p style="text-align:justify; font-size:14px;"><?php echo $content; ?></p>
<?php } ?>

</div><!-- End of leftside -->
</div>

	
	<?php /*
 $query= "SELECT * FROM krishnakatha";
$run = mysql_query($query);
while($row=mysql_fetch_array($run)){
$title = $row['Title']; 
$image = $row['Image']; 
$content = $row['Description']; 

?>
<h6 id="p2" style="margin-right:5px;"><a href="krishnakatha.php?id=<?php echo $post_id; ?>"><?php echo $title; ?></a></h6>
<center><img src="krishnakatha/<?php echo $image ; ?>" height="500" class="img-responsive" id="img2" name="images"></center>
<i id="img2"><?php  echo $content ; ?></i>
<h6 align="right"><a href="krishnakatha.php?id=<?php echo $post_id; ?>"></a></h6>
  <?php }*/ ?>

<?php require_once('include/footer.php'); ?>
</div><!-- End of container -->

</body>
</html> 