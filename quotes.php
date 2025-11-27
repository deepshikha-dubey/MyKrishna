<?php require_once('include/header.php'); ?>
 
  <script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});

  </script>
<style>
.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
}

.carousel-indicators li {
    border-color: #f4511e;
}

.carousel-indicators li.active {
    background-color: #f4511e;
}

.item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
}

.item span {
    font-style: normal;
}
</style>
</head>
<body>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 25000); // Change image every 2 seconds
}
</script>

<div class="container">
<div class="row">
<div class="col-sm-3">
<img src="Images/logo2.png" class="img-responsive">
</div><!-- End of col -->
<div class="col-sm-9" align="right">
</div>
</div><!-- end of row -->
</div>

<div class="container">
<div class="row">
<div id="header" background="black">
<ul>
<li><a href="index.php"class="active">Home</a></li>
<li><a href="aboutkrishna.php">About Krishna</a></li>
<li><a href="postview.php">Krishna con</a></li>
<li><a href="slider/slideimg.html">Images</a></li>
<li><a href="video.php">Videos</a></li>
<li><a href="quotes.php">Krishna Quotes</a></li>
<li><a href="contact.php">Contact Us</a></li>

</ul>
</div><!-- End of menu -->
</div><!-- End of row-->
</div><!-- End of container -->

<h2 align="center" style="color:#f20068;">Beautiful Quotes</h2>
<div id="myCarousel" class="carousel slide text-center" style="border-bottom:1px  solid #000;" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="3"></li>
		    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
    <div class="item active">
    <h4>"Anger is never without a reason, but seldom with a good one.!"</h4>
    </div>
	
    <div class="item">
	 <h4>"Why worry so much, plan so much, have so many anxieties?"
	 <br>"why not just put our lives into Krishna's hands?"<br>
	 "why not just surrender?"<br>" Why not just be happy that our fate rests in him?"</h4>
    </div>
	
	<div class="item">
	<h4>Whatever you are doing patiently that time is not waisted<br/>
	     Impatiently doing something know that you are wasting your time</h4>
  </div>
  <div class="item">
   <h4> Conciousness is originally pure, like water. But if we mix water with a certain color, it changes.<br/>
    Similarly, conciousness is pure, for the spirit soul is pure. But conciousness is changed <br/>
	according to the association of the material qualities.
        </h4>
  </div>
   <div class="item">
   <h4> 
“I am completely under the control of My devotees. Indeed, I am not at all independent.<br/> Because My devotees are completely devoid of material desires,<br/>
 I sit only within the cores of their hearts. What to speak of My devotee, <br/>even those who are devotees of My devotee are very dear to Me.”
        </h4>
  </div>
  
   <!-- Left and right controls -->
   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  
</div>
</div><br/>
 <div class="container">
 
  <?php 
include('connect.php');
 $query= "SELECT * FROM krishna";
$run = mysql_query($query);
while($row=mysql_fetch_array($run)){

$post_id= $row['ID'];
$title = $row['Title']; 
$content =$row['Description'];

?>
<h4><a href="page.php?id=<?php echo $post_id; ?>"><?php echo $title; ?></a></h4>
<p align="justify"><i><?php  echo $content ; ?></i></p>

  <?php } ?> 
 
<?php require_once('include/footer.php'); ?>
 </div>
</body>
</html> 