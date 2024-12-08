<?php
	
	$note = 3;
	$strNote = '';
	
	if($note == 1) {
		$strNote = 'Sehr gut';
	} else {
		if($note == 2) {
			$strNote = 'Gut';
		} else {
			if($note == 3) {
				$strNote = 'Befriedigend';
			} else {
				if($note == 4) {
					$strNote = 'Ausreichend';
				} else {
					if($note == 5) {
						$strNote = 'Mangelhaft';
					} else {
						if($note == 6) {
							$strNote = 'Ungenügend';
						} else {
							$strNote = 'unzulässige Schulnote';
						}
					}
				}
			}
		}
	}

	
	
	if($note == 1) {
		$strNote = 'Sehr gut';
	} elseif($note == 2) {
		$strNote = 'Gut';
	} elseif($note == 3) {
		$strNote = 'Befriedigend';
	} elseif($note == 4) {
		$strNote = 'Ausreichend';
	} elseif($note == 5) {
		$strNote = 'Mangelhaft';
	} elseif($note == 6) {
		$strNote = 'Ungenügend';
	} else {
		$strNote = 'unzulässige Schulnote';
	}	
	
	
	
	switch($note) {
		case 1:	$strNote = 'Sehr gut'; break;
		case 2:	$strNote = 'Gut'; break;
		case 3:	$strNote = 'Befriedigend'; break;
		case 4:	$strNote = 'Ausreichend'; break;
		case 5:	$strNote = 'Mangelhaft'; break;
		case 6:	$strNote = 'Ungenügend'; break;
		default: $strNote = 'unzulässige Note'; break;
	}
	
	
	$strNote = match($note) {
		1 => 'Sehr gut',
		2 => 'Gut',
		3 => 'Befriedigend',
		4 => 'Ausreichend',
		5 => 'Mangelhaft',
		6 => 'Ungenügend',
		default =>'unzulässige Note' 
		
	};
	


	echo $note . ' = ' . $strNote;	
	
	
?>

