<?php 

namespace Hcode\Model;

use Hcode\Change;
use Hcode\Model;
use Hcode\Juros;
use Hcode\DB\Sql;





Class Glink(){

	$data1 = new Pusuario();

	$data = $data1->getData();

	public static function  my_encrypt($value, $key) {

    $encryption_key = base64_decode($key);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($value, 'aes-256-cbc', $encryption_key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);

	}

	$code = my_encrypt($data,Pusuario::SECRET);
	 
	
 				$link = "http://paypalmz.net/cliente/proof/send?code=$code";

 	/*
 				$mailer = new Mailer($data["desemail"], $data["desperson"], "Redefinir Senha da Hcode Store", "forgot", array(
 					"name"=>$data["desperson"],
 					"link"=>$link
 				));
 
 				$mailer->send();
 
 				return $data;

 				*/
 				return $link;
}







 ?>