<?php
		
	include_once 'includes/init_blog.inc.php';	
	
	$pagetitle = 'Blog-Homepage';
	$pagedescription = 'Beschreibung der Seite für Suchmaschinen';
	
	$blog = new Blog();

?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?= $pagedescription ?>">
		<title><?= $pagetitle ?></title>
		
		<script src="js/script.js"></script>
		
		<link rel="stylesheet" href="css/blog.css">
		<link rel="stylesheet" href="css/blog_zusatz_2spalten.css">
		
		<!-- Seitenspezifische Anpassung CSS -->
		<style>
			#rest{
				padding: 0 2em 1.5em 2em; 
				border: 2px solid #04AA6D; 
				height: 350px;
				display: table-cell;
				vertical-align: middle;
				background: #fff;
				font-family: calibri;
				
					font-family: Calibri;
					font-size: 1.0em;
			}
		</style>
		
		<!-- Seitenspezifische JS -->
		<script>
		function loadRest() {
		  const xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  document.getElementById("rest").innerHTML = this.responseText;
			}
		  };
		  xhttp.open("GET", "http://localhost:8080/__PHPA/_projekt/rest.php");
		  xhttp.send(this.responseText);
		}
		</script>
		
		
	</head>
	
	<body>

		<main>
			
			<?php include 'includes/header.inc.php'; ?>

			<?php include 'includes/menue.inc.php'; ?>
			
			<article>
			  
				<h1>MeiMei und Musik</h1>
				  
				<figure style="margin: 0em 1.5em 0em 0; width: 40%; float: left;">
					<img src="images/meimei.jpg" style="width: 100%" alt="Nice Boy ;-)">
					
				</figure>
				  
				<div style="margin: 0em 0 0 0; padding: 0em 0 0em 0;">
				  	<i>Musik hat Einfluss auf physikalische Vorgänge im Körper: Sie verändert den Herzschlag, Atemfrequenz und Blutdruck. Musik kann beflügeln, glücklich stimmen, beruhigen, entspannen, Erinnerungen wachrufen.</i>		
				</div>
				  
				<div style="clear: both;"></div>
				<hr>
				<br>
				<!--h2 style="margin-top: 1em">Aktuelles aus meinen Blog</h2-->
		
				<div id="rest"></div>
					<br><hr><p>
					<a class="link" href="blog.php" title="In den Blog.">Mein Blog</a></p>
				 
					
			  
			  
			</article>
			
			<aside style="background: #ddd; font-size: 0.85em; line-height: 1.4em;">
			
				<h2 style="margin-bottom: 0">Meine Webservices</h2>
					<p>
						Jetzt können Sie über einen Webservice meine Blogbeiträge direkt und kostenfrei auf Ihrer Webseite einbinden. Mehr dazu und wie es geht finden Sie unter <a href="blog_service.php">Webservice</a>.
					</p>
					<hr style="border-color: #ccc">
					<a class="link" href="blog_service.php" title="Webservices.">Webservice</a>
					<br><hr>
					<h2 style="margin-top: 1em">Copyleft</h2>
					<p>Während das Urheberrecht die Kontrolle über das Kopieren, Verteilen und Ändern ihrer Werke gibt, besteht das Ziel von Copyleft darin, allen Benutzern des Werks alle Freiheiten zu geben.</p>
					<ul>
						<li>Das Material in jedwedem Format oder Medium vervielfältigen und weiterverbreiten und zwar für beliebige Zwecke, sogar kommerziell.<br><br>
						<li>Das Material remixen, verändern und darauf aufbauen und zwar für beliebige Zwecke, sogar kommerziell.<br><br>
						<li>Sie müssen angemessene Urheber- und Rechteangaben machen und angeben, ob Änderungen vorgenommen wurden. Diese Angaben dürfen in jeder angemessenen Art und Weise gemacht werden.
					</ul>
					<p>
						<br>Mehr unter <a href="https://creativecommons.org/licenses/by-sa/3.0/de/deed.de" target="_blank">CC BY-SA 3.0 DE</a></p>
			</aside>
			
			<?= $cookieConsent ?>
		
			<?php include 'includes/footer.inc.php'; ?>
		
		</main>
		
		<script>loadRest();	setInterval(loadRest, 5000);</script>
		
	</body>
	
</html>