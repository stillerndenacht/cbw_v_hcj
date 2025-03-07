<?php
		
	include_once 'includes/init_blog.inc.php';	
	
		
	$pagetitle = 'BlogBeitrag';
	$pagedescription = 'Beschreibung der Seite für Suchmaschinen';

	$meldung = '';
	$id = $_GET['id'] ?? false;
	
	$blog = new Blog();
		
	if(!$id || !$item = $blog->getOneItem($id)) {
		header('Location: blog.php');
		die;
	} 

	# --------------------------------------------------------
	# CONTROLER!! Nur für Blogger
	# --------------------------------------------------------
	if($blog->isLogin()) :
	
		$do = $_GET['do'] ?? false;
				
		switch(strtolower($do)) :
				
			case 'lock': 
				$blog->setItemLock($item); 
				header('Location: ' . $_SERVER['PHP_SELF'] .'?id=' . $id); die;
				
			case 'free': 
				$blog->setItemFree($item); 
				header('Location: ' . $_SERVER['PHP_SELF'] .'?id=' . $id); die;
				
			case 'del': 
				$blog->delItem($item); 
				header('Location: blog.php'); die;
		
		endswitch;
		
	else :
	
		
		# --------------------------------------------------------
		# Wenn eine Bewertung gePOSTet wurde.
		# NULL wenn "leer" gePOSTet
		# --------------------------------------------------------
		if(isset($_POST['vote']) ) {
			$item->addVote($_POST['vote']);
			$blog->saveVoting($item);
			header('Location: ' . $_SERVER['PHP_SELF'] .'?id=' . $id); 
			die;
		}
	endif;
	# --------------------------------------------------------

	
	if($item->isFree() && $blog->isLogin()) {
			
		$meldung = '<div style="margin-bottom: 2em;padding: 1em; text-align: center; background: lightgreen">' . 
				   'Dieser Beitrag ist zur Zeit <b>freigegeben</b>.
					</div>';
					
	} elseif(!$item->isFree() && $blog->isLogin()) {
		
		$meldung = '<div style="margin-bottom: 2em;color: #fff;padding: 1em; text-align: center; background: brown">' . 
				   'Dieser Beitrag ist zur Zeit <b>gesperrt</b>.
					</div>';
	} else {
		
		# Diese Seite nicht von der "selben" Seite aufgerufen wurde, DANN NUR ZÄHLEN!!
		
		if(parse_url($_SERVER["HTTP_REFERER"])['path'] != $_SERVER["PHP_SELF"]) {
			$item->addViewCount();	
			$blog->saveViewCount($item); # speichern!
		}
		
	}

	$viewCount = $item->getViewCount();

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
			.lock {
				border: 4px solid red;
				background: #ccc;
				padding: 1em;
				margin: 1em 0 1em 0;
			}
				
			form {
					text-align: center; 
					margin-top: 1em
			}
			
			.vote {
				display: inline-block;
			}
			
			.vote * {
				float: right;
			}
			
			.vote input[type="radio"] {
				display: none;
			}
			
			.vote label {
				font-size: 2.5em;
				text-shadow: 1px 1px 3px black;
				color: #fff;
			}

			.vote input:checked ~ label {
				color: orange;
			}
		
			.vote label:hover,
			.vote label:hover ~ label {
				color: orange;
			}

			input[type="submit"] {
				cursor: pointer; 
				border-color: transparent;
				color: #fff;
				font-weight: bold;
				display: inline-block;
				padding: 0.6em 1em;
				background: orange;
				position: relative; 
				margin-left: 0.7em;
				top: -8px;
			}
			
			input[type="submit"]:hover {
				background: brown;
			}
			
		</style>
		
		
	</head>
	
	<body>

		<main>
			
			<?php include 'includes/header.inc.php'; ?>

			<?php include 'includes/menue.inc.php'; ?>
			
			
			<article>
			
				<h1><?= $item->getSubject() ?> <?= $item->getStars() ?></h1>
				
				<?= $meldung ?>
				
				<div>
					<p><small><?= date('d.m.Y H:i', $item->getCreateDate()); ?></small></p>
					<div>
						<?= nl2br($item->getBody()) ?>
					</div>
					
					<hr>
					<p>
						Aufrufe: 	<?= $viewCount ?><br>
						Voting: &nbsp;	<?= $item->getVoting() ?> Sterne bei 
						            <?= $item->getVoteCount() ?> Bewertungen<br>
									
					</p>
					<hr>
				</div>
				
				<?php if($blog->isLogin()) { ?>
				
					<p>
					<?php if($item->isFree()) { ?>
						<a class="link" 
								href="?id=<?= $item->getID() ?>&do=lock" 
								title="Beitrag sperren."
								style="background: brown">
								Sperren
						</a>
					<?php } else { ?>
						<a class="link" 
								href="?id=<?= $item->getID() ?>&do=free" 
								title="Beitrag freigeben."
								style="background: green">
								Freigeben
						</a>
					
					<?php } ?>
						<a class="link" 
							href="blog_edit.php?id=<?= $id ?>" 
						   title="Beitrag bearbeiten"
						   style="background: blue">Bearbeiten</a>
						
						<a onclick="return confirm('Wirklich löschen?')" 
						   class="link" 
						   href="?id=<?= $id ?>&do=del" title="Beitrag löschen."
						   style="background: red">Löschen</a>
					</p>	
					
					<hr>
					
				<?php } else { ?>
				
					<form action="?id=<?=$id ?>" method="post">
						<section class="vote" title="Klicken und dann bewerten.">
							<input type="radio" id="r1" name="vote" value="5">
							<label for="r1">&#10038;</label>
							<input type="radio" id="r2" name="vote" value="4">
							<label for="r2">&#10038;</label>
							<input type="radio" id="r3" name="vote" value="3">
							<label for="r3">&#10038;</label>
							<input type="radio" id="r4" name="vote" value="2">
							<label for="r4">&#10038;</label>
							<input type="radio" id="r5" name="vote" value="1">
							<label for="r5">&#10038;</label>
						</section>
						<input type="submit" value="Vote jetzt!" />
					</form>
					<hr>
					
				<?php } ?>
			
				<p>
					<a class="link" href="blog.php" title="Zurück in den Blog.">Zurück</a>
				</p>
			  
			</article>
			
			
			<?= $cookieConsent ?>
		
			<?php include 'includes/footer.inc.php'; ?>
		
		</main>
		
	
		
	</body>
	
</html>