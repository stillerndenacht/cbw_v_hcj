<?php

	
	const MWST = 19;
	#define('KONST_1', KONST * 10000);
	
	$var1 = 10;
	
	class Test {
		
		const MWST = MWST * 2;
		
		
		function test() {
			echo Test::MWST;
		}
		
	}
	

	
	echo Test::MWST;
	
	$obj = new Test();
	
	
	$obj->test();
	
	#var_dump($obj);
	
	

	