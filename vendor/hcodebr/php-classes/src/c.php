<?php 

namespace Hcode;
use Hcode\CurrencyLayer;

/**
* 
*/
class Change
{
	
	private $valor;

	public function convert(){

					//turning off low level notices
			error_reporting(E_ALL ^ E_NOTICE);

			
			//Plano da conta do converter
			$plan = 'free';

			//instantiate the class;
			$currencyLayer = new CurrencyLayer();


			/*
			Conversao de Moeda Usando o Metodo de Class
			*/
			$valort = $currencyLayer->convertCurrency(1,'MZN');

			return $valort;
}
}



 ?>