<?php require_once('include/header.php'); ?>
   
   <BODY>
       <div class="container content">
		
        
		 
          <div class="" id="contentarea">
   <div style="padding:20px;">
    <?php 
      include('connectdb.php');
 
        $page_id = $_GET['id'];
	    $query = "SELECT * FROM krishna where ID = '$page_id'";
        $run = mysqli_query($conn, $query);
	    while($row=mysqli_fetch_array($run)){
	    $title = $row['Title']; 
		
        $image = $row['Image'];
        $content = $row['Description'];
	   
   ?>
       <h2 style="color:#f20068;"><?php echo $title; ?></h2>
	   <h4 style=" color:#f20068; text-align:right;"><?php /* echo $date;*/ ?></h4>
      <center><img src="Images/<?php echo $image ; ?>" width="600" class="img-responsive"></center><br/>
      <p><?php echo $content; ?>
       <?php } ?>
	   </div>
      </div><!-- End Of contentarea -->
        
       <?php require_once('include/footer.php'); ?>	
	  </div><!-- End Of Wrapper -->
   </BODY>
</HTML>
