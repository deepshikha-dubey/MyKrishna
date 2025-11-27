<style>
.navbar-default{
	  height:500px;
	}
@media screen and (max-width: 700px){
	.navbar-default{
	  height:auto;
	}
}	
</style>
<center>Welcome:
<font color="maroon" size="6"><?php  echo $_SESSION['user_name']; ?></font>
</center>
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