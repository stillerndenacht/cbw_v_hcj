<!-- damit das hier läuft muss pdo_dbthings_freunde.php über http://localhost/hcj_cbw/php_kurs/ aufgerufen werden. 
 Denn sonst gibt es die Datenbank nicht-->

<?php $seitentitel = 'Freund:in aktualisieren' ?>
<?php
include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
		echo $id;

	$sql = 'SELECT id, vorname, nachname, info, zeit FROM PDOFreunde WHERE id=' . $id;
	$statement 	= $db->query($sql);
	$freund 	= $statement->fetch();
	var_dump($freund); # nur zum Test

	$vorname 	= $freund['vorname'];
	$nachname 	= $freund['nachname'];
	$info 		= $freund['info'];
	$zeit 		= date("d.M.Y H:i:s", $freund['zeit']);

} elseif (isset($_POST['vorname']) && isset($_POST['nachname']) && isset($_POST['info']) && isset($_POST['id'])) {

	$id 		= $_POST['id'];
	$vorname 	= $_POST['vorname'];
	$nachname 	= $_POST['nachname'];
	$info 		= $_POST['info'];
	$zeit 		= time();

	$sql = "UPDATE PDOFreunde SET vorname ='$vorname', nachname='$nachname', info='$info', zeit=$zeit WHERE id= " . $id;
	echo $sql;
	$db->exec($sql);

	header('Location: pdo_selectOne.php?id=' . $id);
	die;
}
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Beschreibung der Seite ca. 150 Zeichen">
	<title><?php echo $seitentitel ?></title>
	<style>
		* {
			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
		}

		h2 {
			background-color: lightgreen;
			max-width: 50%;
		}

		button {
			padding: 5px;
			font-size: large;
			background-color: lightseagreen;
		}

		button>a {
			text-decoration: none;
			color: whitesmoke;
		}

		#delete {
			background-color: red;

		}

		article {
			background-color: lightyellow;
			max-width: 50%;
			min-height: 100px;
		}

		label {
			font-size: 12px;
			margin-bottom: 0px;
		}

		#nachname,
		#vorname {
			color: darkmagenta;
		}

		#namespan {
			color: darkmagenta;
			font-size: larger;
			font-weight: bolder;
		}

		#meldung {
			color: red;
			font-size: larger;
			font-weight: bolder;
		}

		#info {
			border: 3px solid green;
			border-radius: 3px;
			min-height: 15px;
		}
	</style>
</head>

<body>
	<h1><?php echo $seitentitel ?></h1>
	<p><?= $zeit ?></p>
	<form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
		<input type="text" name="id" value="<?= $id ?>">
		<table>
			<tr>
				<td>
					<label for="name">Name </label><br />
					<input type="text" name="nachname" id="nachname" value="<?= $nachname ?>" required />
				</td>
				<td>
					<label for="vn">Vorname </label><br />
					<input type="text" name="vorname" id="vorname" value="<?= $vorname ?>" required />
				</td>
			</tr>
		</table>
		<div>
			<label for="freitext">Freitext </label><br />
			<textarea name="info" id="info" cols="30" rows="10"><?= $info ?></textarea>
		</div>
		<input type="submit" value="Absenden" />
	</form>


	<button><a href="pdo_selectAll.php">zurück zu komische Freund:innen</a></button>
</body>