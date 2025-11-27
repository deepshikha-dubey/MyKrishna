<?php require_once('include/header.php'); ?>
	 <style>
	   .jumbotron{
	       padding:10px;
		   background:#fff;
	   }
	   h2{
	    color:#f20068;
	   }
	 </style>
   </HEAD>
   
   <BODY>
      <div class="container">
		
		
		   <div class="jumbotron">
          <div class="row">
		     
		      <div class="col-md-8" id="leftside">
			  <center><h2>Krishna Quotes</h2></center>
			     <?php
				      include("connectdb.php");
					  $query = "select * from krishna order by rand() LIMIT 0, 2";
					  $run = mysqli_query($conn, $query); 
					  while($row=mysqli_fetch_array($run)){
					    $id = $row['ID'];
					    $title = $row['Title'];
						$image = $row['Image'];
						$content =substr($row['Description'],0,100);
					 ?>
    <h3><a href="page.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></h3>
     <center><img src="Images/<?php echo $image ; ?>" width="450"  class="img-responsive"></center>
     <p align="justify"><i style="font-size:17px;"><?php  echo $content ; ?></i></p>
     <p style="float:right;"><a href="page.php?id=<?php echo $id; ?>">Read More</a></p><br/>
   <?php } ?> 
			  </div><!-- End Of leftside -->
			  
			  <div class="col-md-4" id="rightside">
			     <h2 style="text-align:center";>Krishna Story</h2>
			  <?php 
     include('connectdb.php');
 
    $query= "SELECT * FROM krishnakatha order by rand() LIMIT 0,10";
     $run = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($run)){

    $post_id= $row['ID'];
    $title = $row['Title']; 
    $image = $row['Image'];
   // $date = $row['date'];
    
   ?>
   <div class="row">
   	<div class="col-md-4"><center>
	<img src="krishnakatha/<?php echo $image ; ?>"  name="images" class="img2 img-thumbnail">
	</center></div>
   	<div class="col-md-8">
   		<h4><a href="krishnakatha.php?id=<?php echo $post_id; ?>"><?php echo $title; ?></a></h4>
       
   	</div>

   </div>
     	<hr/>
        

  <?php } ?>
			  
			  </div><!-- End Of rightside -->
			  
		  </div><!-- End Of row -->
       		 	  
		</div><!-- end of jumbotron-->
      <?php require_once('include/footer.php'); ?>
	  </div><!-- End Of container -->
   </BODY>
</HTML>
