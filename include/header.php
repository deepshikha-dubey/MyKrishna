<!DOCTYPE HTML>
<HTML>
   <HEAD>
     <TITLE>Me & My Krishna</title>
	   <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
   <link href="lightbox/src/css/lightbox.css" rel="stylesheet">
	 <link rel="icon" type="image/png" href="images/icon.png">
	 <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>

	   <style>
             body{ background:#f0f0f0; }
     .container{ 
                  background:#fff; 
                  padding: 0px;
                  }
             .navbar-inverse{border-radius:0px;} 
             .content{padding-left: 15px;
                      padding-right: 15px;}
  </style>

   </HEAD>
   <BODY>
      <div class="container">
        <div class="container-fluid" style="height:23px; background:#191970; color:#fff;  padding-left:15px;">
<p style="padding:5;">Today Date is: &nbsp; &nbsp; <?php  echo date("l jS, F Y"); ?></p>
</div>
    <center>
      <div class="row">
      <div class="col-md-12">
        <img src="img/My Krishna.jpg" class="img-responsive" width="100%">
       </div><!-- End Of banner -->
       </div>
     
         
         <nav class="navbar navbar-inverse">
           <div class="navbar-header">
         <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </button>
          </div>
      
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
       <li><a href="index2.php"class="active">Home</a></li>
        <li><a href="#" data-toggle="dropdown">
         About Krishna
         <span class="caret"></span>
        </a>
           <ul class="dropdown-menu">
            <li><a href="about.php">About Krishna</a></li>
            <li><a href="krishnastory.php"> Krishna Story </a></li>
            <li><a href="krishnaquotes.php"> Krishna Quotes </a></li>
           </ul>
         </li>
       <li><a href="index.php">Krishna Con</a></li>
        <li><a href="#" data-toggle="dropdown">
         Gallery
         <span class="caret"></span>
        </a>
           <ul class="dropdown-menu">
            <li><a href="gallery.php">Images </a></li>
            <li><a href="video.php"> Videos</a></li>
           </ul>
         </li>

        <li><a href="krsnaprotector.php">Krishna as a Protector</a></li>
        <li><a href="devotinal.php">Devotional Life</a></li>
       <li><a href="krishnalife.php">Krishna is Completed</a></li>

        <li><a href="contact.php">Contact</a></li>
      </ul> 
         <ul class="nav navbar-nav navbar-right">
         <li><a href="Admin/login.php">Login</a></li></ul> 
          </div>
    </nav>
      </center>
      </div>      