<?php require_once('include/header.php'); ?>
	 <style>
	 .navbar-inverse{border-radius:0px;}
	  .col-md-3 p.text {
position:relative;
bottom:0px;
left:0px;
color:#f20068;
text-align:center;
font-family:verdana;
font-size:16px;
visibility:hidden;

}  	  
.col-md-3:hover .text {
visibility:visible;
}
	 .kquot{
	 	font-size: 18px;
	 	color:blue;
	 	padding-top:30px; 
	 }
	  .thumbnail{
	   width:100%;
	   overflow:hidden;
	 }
	 #img1{
	   -webkit-transition:all 0.5s ease;
	   }
	 
	 #img1:hover{
	     transform: scale(1.5);
	 }
	 .img:hover{
	 	filter: grayscale(90%);
	 }
	  
	  font{
	     font-size:50px;
		 color:#f20068;
	  }
	 .p{ 
	    color:#f20068; 
	  }	  
	   h3{ color:#f20068;}
	  .modal-footer-left{
	    padding-left:20px;
	  }
	  .text-right{padding-right:20px;
	  padding-bottom:20px;}
	<!--  @media screen and (max-width:720px){
	  font{
	     font-size:20px;
	  }
	  .text{
	  text-size:10px;}
	  } -->
	 
  </style>
   </HEAD>
   <?php 
   /*
         include("connectdb.php");
					  $query = "SELECT * FROM krishna ORDER BY id DESC LIMIT 0, 1";
					  $run = mysql_query($query);
					 $row=mysql_fetch_array($run);
					    $id = $row['ID'];
					   
						$image = $row['Image'];
						$content =substr($row['Description'],0,400);
						*/


						// Query to select data from the 'krishna' table
		 include("connectdb.php");
$query = "SELECT * FROM krishna ORDER BY id DESC LIMIT 0, 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Fetch the first row
    $row = $result->fetch_assoc();

    // Extract data
    $id = $row['ID'];
    $image = $row['Image'];
    $content = substr($row['Description'], 0, 400);

    // Now you can use $id, $image, and $content as needed
    // ...
} else {
    echo "No results found.";
}

   ?>
   <BODY>
      <div class="container content">
		 
            <!-- <div class="modal fade" id="login"data-backdrop="static">
			  <div class="modal-contant modal-dialog modal-sm">
			  <form style="background:#fff; border-radius:10px;">
			    <div class="modal-header">
				  <p class="lead">Login Form</p>
				</div>
				<div class="modal-body">
				  <div class="input-form">
				    <label class="label-control">Name </label>
					<input type="text" placeholder="Enter Your Name" class="form-control">
				  </div>
				  <div class="input-form">
				    <label class="label-control">Password </label>
					<input type="password" placeholder="Enter valid Password" class="form-control">
				  </div>
				</div>
				<div class="modal-footer">
				  <div class="form-group">
				   <button type="submit" class="btn btn-success">Login</button>
				   <button class="btn btn-danger">Cancel</button>
				  </div>
				   <p><a data-target="#register" data-toggle="modal">Register Here</a></p>
				</div>
				</form>
			  </div>
			</div> -->
			
			
             <div><i style="color:#f20068;">
			 <marquee>हरे कृष्णा हरे कृष्णा, कृष्णा कृष्णा हरे हरे, हरे रामा हरे रामा, राम राम हरे हरे, हरे कृष्णा हरे कृष्णा, कृष्णा कृष्णा हरे हरे, हरे रामा हरे रामा, राम राम हरे हरे, 
                   हरे कृष्णा हरे कृष्णा, कृष्णा कृष्णा हरे हरे, हरे रामा हरे रामा, राम राम हरे हरे,   हरे कृष्णा हरे कृष्णा, कृष्णा कृष्णा हरे हरे, हरे रामा हरे रामा, राम राम हरे हरे</marquee></i></div>
					 
		     <center><font class="font">KRISHNA CONCIOUSNESS</font></center>
			 <div class="row">
		  <!--  <div class="col-md-3">
		   <a href="index.php" class="thumbnail">
		   <img src="img/krishna (3).jpg"alt="img-1" class="img-responsive img" id="img1" ></a>
		    <p class="text"><b>Krishna Quotes</b></p>
		  </div> -->
			  <div class="col-sm-7">
			  	<div class="row" style="border: 1px groove #f20068; margin-left: 5px;">
			  		<div class="col-sm-6" style="padding-top: 13px;"> <a href="index.php" class="thumbnail">
		           <img src="Images/<?php echo $image; ?>" class="img-responsive img" id="img1" ></a>
		         </div>
			  		<div class="col-sm-6">
			  			<p class="text-justify kquot"><i><?php echo $content; ?></i></p>
			  		</div>
			  	</div>
			  </div>
			 <div class="col-md-5" style="padding-top:15px;padding-right:20px;">       
		    <p class="text-justify">O all powerful ocean of mercy, cast your glance upon me. I'm bewildered, helplessly sinking in the sea of Samsara.
			 You descended to remove the distress of your devotee Prahlada. O Laxmi-Narayana, Please bless me with the touch of your Lotus-hands.
			<br/><br/>O Lord Krishna, You are the Master of the entire Universe. What have You not given to us? You have entered the core of our hearts
			 and dissipated the darkness of our ignorance by Your effulgence. This is the supreme gift. We do not need a material donation...</p>
			 <p class="text-justify">Only ShriKrishna is mine, and I am only Shrikrishna's. All others will come and go, they will disperse 
			 away. This is what ultimately hits home. No one else is mine; Only Lord Krishna is mine.<br/>
			 This realization is exceptional, it is sweet, it is the essence of everything.</p>
			 <p class="lead">Im Only Krishna's and only ShriKrishna is mine.</p>
			</div> 
				
			  </div><!-- End of Row-->
		
			  <br>
			  <div class="row">
			  <div class="col-md-6">
			   <h3>Lord Sri Krishna symbolizes totality</h3>
			     <p class="text-justify"> Shrikrishna has been the center of our faith since ages.  They are sometimes Yoshoda ma dearest son, and sometimes the brij of naughty 
				   Kanha, and sometimes steals  cloverthe gopischeated.  Sometime accepting the hospitality of the Vidur wife, so, sometimes Arjungives 
				   knowledge of the Geeta. Krishna is one but many of his forms. In every form totality, no incompleteness,  whatever do with him mind, they
				   don’t care himself promise for his friends and devotees, and gladly accept Gandhari's curse. Such is our Yogeshwar Lord ShriKrishna.<br/>
                   Jai Shri Krishna ……. <a href="mykrishna.php">Read More</a></p>
			   </div><!--end of left side-->
			  
			  <div class="col-md-6">
			  <center>
			  <div id="fb-root"></div>
<script>
 (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-page" data-href="https://www.facebook.com/Me-and-My-Krishna-242648956247751/" data-small-header="false" 
data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
<blockquote cite="https://www.facebook.com/Me-and-My-Krishna-242648956247751/" class="fb-xfbml-parse-ignore">
<a href="https://www.facebook.com/Me-and-My-Krishna-242648956247751/">Me and My Krishna</a></blockquote></div>
                   </center>
			  </div><!--end of col-md-6-->
			   
		  </div><!-- End Of row -->
		  <br/>
          <div class="row"> 
	     <center>
	       <div class="col-md-3">
		   <a href="devotinal.php">
		   <img src="img/krishnakatha (14).jpg"alt="img-1" id="img1"class="img-circle"height="150" ></a>
		   <p class="text"><b>Devotional Life </b></p></div>
		  
		  <div class="col-md-3">
		   <a href="krsnaprotector.php">
		   <img src="img/krishnakatha (12).jpg"alt="img-1" id="img1"class="img-circle"height="150"></a>
		    <p class="text"><b>Krishna is Protector</b></p>
		  </div>
		  
		  <div class="col-md-3">
		   <a href="about.php">
		   <img src="img/krishnakatha (15).jpg"alt="img-1"id="img1" class="img-circle"height="150"></a>
		    <p class="text"><b>About Krishna </b></p>
		  </div>
		  
		   <div class="col-md-3">
		   <a href="krishnalife.php">
		   <img src="img/krishnakatha (13).jpg"alt="img-1"id="img1" class="img-circle"height="150"></a>
		    <p class="text"><b> Krishna is completed</b></p>
		  </div>
		  </center>
		  </div><br/>
		  
     <?php require_once('include/footer.php'); ?> 
				
	  </div><!-- End Of container -->
   </BODY>
</HTML>
