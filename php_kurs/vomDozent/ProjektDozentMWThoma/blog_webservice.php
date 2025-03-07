<?php
		
	include_once 'includes/init_blog.inc.php';	
	
	$blog = new Blog();
	
	$pagetitle = 'Webservices';
	$pagedescription = 'Beschreibung der Nutzung von REST- oder SOAP-Webservices.';

	$options = ['uri' 		=> 'http://localhost/soap/',
	            'location' 	=> 'http://localhost:8080/__PHPA/_projekt/soap.php'];
	
	$client = new SoapClient(null, $options);
	
	$zufall = $client->ramdomItem();
	



	
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
		
		<!-- Seitenspezifische Anpassung CSS -->
		<style>
			code {
					display:block; 
					padding: 1em; 
					background: #fff; 
					overflow: hidden;
			}
			
			summary {
				color:brown; 
				cursor: pointer;
			}
			
			summary h3 {
				display: inline;
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
		  xhttp.open("GET", "http://localhost:8080/FAG31_INF1/blog_thoma/blog_service_rest.php");
		  xhttp.send(this.responseText);
		}
		
	</script>
		
	</head>
	
	<body>

		<main>
			
			<?php include 'includes/header.inc.php'; ?>

			<?php include 'includes/menue.inc.php'; ?>
			
			<!-- Hier eingebunden, damit der Cookie nach "am Ende" der Seite gesetzt werden kann -->
			<?php include 'includes/cookie_consent.inc.php'; ?>
			
			<article>
			
				<h1>Freie Webservices</h1>
			  
				<p>
					Ich stelle einige freie Webservices zur Verfügung. Alle Services können von Ihnen frei und ohne Einschränkungen verwendet werden.
				</p>
				
				<p>
					Es stehen die Services sowohl in einer REST- also auch in einer SOAP-Variante zur Verfügung. Nachfolgend finden Sie die Beschreibung der Services.<br><br>
				<p>
				
				<h2>REST</h2>
				
				<p>
					Der REST-Services liefert immer einen formatierten HTML-Snippet zurück
					und kann so über die Url
				</p>
				
				<p>
					<code>https://www.domain.de/blog_service_rest.php</code>
				</p>
				
				<p>
					geladen und konsumiert werden. Der Service liefert immer einen zufälligen 
					Blogbeitrag zurück. Über den optionalen Parameter "q=" kann ggf. (später) ein anderer
					Service abgerufen werden (Vorgabe "q=zufall").
				</p>
				<br>
				
				<details>
				
					<summary title="Code ein- oder ausblenden."><h3>Beispiel PHP - REST</h3></summary>
					
					<p>
						<code>
							$url = 'https://www.domain.de/blog_service_rest.php';<br>
							echo file_get_contents($url);
						</code>
					</p>
					
				</details>
				
				<h4>Ergebnis:</h4>
				<p>
					<code style="font-family: arial">
					<?php 
						$url = 'http://localhost:8080/FAG31_INF1/blog_thoma/blog_service_rest.php';
						echo file_get_contents($url);
					?>
					</code>
				</p>
				
				<br>
				
				<details>
					<summary title="Code ein- oder ausblenden."><h3>Beispiel AJAX - REST</h3></summary>
				
					<p>
						Hier ein Beispiel für das Laden des REST-Webservice per JavaScript
						per AJAX. Binden Sie diesen Scrit in der &lt;head&gt; der HTML-Seite ein.
					</p>
					
					<pre><code>function loadRest() {
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	  document.getElementById("rest").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "https://www.domain.de/blog_service_rest.php");
  xhttp.send(this.responseText);
}</code></pre>
				
				<p>
					Fügen Sie innerhalb des &lt;body&gt; - an einer beliebigen Stellen -
					vor dem Aufruf der Funktion loadRest() nachfolgenden Block ein. In diesen Block wird der Service dann eingebunden.
				</p>
				
				<code>
					&lt;div id="rest"&gt;&lt;div&gt;
				</code>
				<p>
					Rufen Sie die Funkltion loadRest() am Ende der HTML-Seite auf.
				<p>
				<code>
					&lt;script&gt;loadRest();&lt;/script&gt;
				</code>
			</details>	
			
			<h4>Ergebnis:</h4>

			<code style="font-family: arial" id="rest"></code>
			
			
			<script>loadRest();</script>
			
			<br>
			
			<h2>SOAP</h2>
			<p>
				SOAP ist ein Netzwerkprotokoll, mit dessen Hilfe Daten zwischen Systemen ausgetauscht und Remote Procedure Calls durchgeführt werden können. SOAP ist ein industrieller Standard des World Wide Web Consortiums.
			
				SOAP stützt sich auf XML zur Repräsentation der Daten und auf Internet-Protokolle der Transport- und Anwendungsschicht zur Übertragung der Nachrichten. Die gängigste Kombination ist SOAP über HTTP und TCP.
			</p>
			<br>
			
			<details>
					<summary title="Code ein- oder ausblenden."><h3>Beispiel PHP - SOAP</h3></summary>
					
					<p>
						Als Namensraum (uri) muss "http://localhost/soap" angeben. Als "location" die URL des SOAP-Servers. <b>Eine WSDL-Datei wird nicht unterstützt.</b> Daher ist für die WSDL-Datei "null" anzugeben.
					</p>
					
					<code><pre>$options = ['uri'     => 'http://localhost/soap/',
            location' => 'https://www.domain.de/blog_service_soap.php'];
$client = new SoapClient(null, $options);</pre></code>
					
					<p>
						Als SOAP-Service steht zur Zeit das liefern eines zufälligen Beitrags aus dem Blog zur Verfügung (siehe REST).Mit<br>
					</p>
					
					<code>$zufall = $client->zufall();</code>
					
					<p>
						steht dann der formatierte HTML-Snippet in $zufall zur Verfügung.
					</p>
					
				</details>
				
				<h4>Ergebnis:</h4>

				<code style="font-family: arial"><?= $zufall ?></code>
				
				<br><hr>
				
				<p>
					
					<a class="link" 
					   href="index.php"
  					   title="Abbrechen und zurück.">Home</a>
				</p>
				
			</article>

		
			<?php include 'includes/footer.inc.php'; ?>
		
		</main>
		
	
		
	</body>
	
</html>