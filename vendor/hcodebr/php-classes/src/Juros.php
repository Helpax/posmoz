<?php 

namespace Hcode;
use Hcode\Model\Pusuario;

/**
* 
*/
class Juros
{

	public function cjuro(){

	$pego = new Pusuario();

	$usd = $pego->getUsd();

	if ($usd <= 10) {
		
		$juros = 2;

	}

	if ($usd > 10 and $usd < 20) {
		
		$juros = 3;

	}if ($usd >20 and $usd <=100 ) {
		
		$juros = 5;

	}if ($usd >= 101) {
			
		$juros = 50;
	}
	
	

	return $juros;
	
}
	
	public function taxa(){

	$pego = new Pusuario();

	$usd = $pego->getUsd();

	if ($usd <= 10) {
		
		$juros = 2;

	}

	if ($usd > 10 and $usd < 20) {
		
		$juros = 3;

	}if ($usd >=20 and $usd <=100 ) {
		
		$juros = 5;

	}if ($usd >= 101) {
			
		$juros = 50;
	}
	
	

	return $juros;
	
}


}


 ?>