<?php

	namespace meimei {
	
		const KONSTANTE = 'Konstante von MeiMei';
		
		function ichBin() {
		
			echo 'Ich bin MEIMEI.<br>';
			echo __FUNCTION__ . '<br>';
			
		}
		
		class Klasse {}
		
	}
	
	
	namespace meimei\test {
		
		function ichBin() {
		
			echo 'Ich bin MEIMEI-TEST.<br>';
			echo __FUNCTION__ . '<br>';
			
		}
	}

	
	


	
