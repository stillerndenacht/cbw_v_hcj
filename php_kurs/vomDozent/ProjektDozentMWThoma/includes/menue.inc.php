

<nav class="topnav" id="myTopnav">
	
  <a href="index.php" class="active">Home</a>
  
  <a href="blog.php">Mein Blog</a>
  <a href="blog_service.php">Webservice</a>
  
  
  <?php if($blog->isLogin()) { ?>
  
	<a href="blog_new.php">Neuer Eintrag</a>
	<a href="blog_logout.php" style="color: tomato">Abmelden</a>
	
  <?php } else { ?>
  
	<a href="blog_login.php">Anmelden</a>
  
	
	
  <?php } ?>
  
  <!--a href="blog_impressum.php">Impressum</a-->
  
  
  <a href="javascript:void(0);" class="icon" onclick="toogleMenue()">&#x2630;</a>
  
</nav>