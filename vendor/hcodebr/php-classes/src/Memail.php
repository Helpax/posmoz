<?php 

/**
* 
*/

namespace Hcode;

use Hcode\Model\Pusuario;
use Rain\Tpl;
use Hcode\Change;
use Hcode\Juros;
use Hcode\Upload;
use Hcode\DB\Sql;


class Memail
{

	private $admin;
	private $cliente_email;
	private $subject;
	private $assunto;

	
	public function manda(){


			// ---------------------------------------------------------------

			$change = new Change();
			$juros = new Juros();

			function codigo(){

			$sql = new Sql();

			$dbcodigo = $sql->select("SELECT cdassinatura FROM `tbpedido` WHERE id=(SELECT MAX(id) FROM `tbpedido`)");

			$data = $dbcodigo[0];

			return $data;
		}

			$cliente = new Pusuario();
			$admine = 'elpidiochilaule@gmail.com';
			$nome = $cliente->getNome();
			$email = $cliente->getEmail();
			$paypal_email = $cliente->getPmail();
			$dolar = $cliente->getUsd();
			$mzn = $cliente->Mt();
			$vjuros = $juros->taxa();
			$cambio = $change->cambio();
			$cambio_r = round($change->cambio());
			$mtjuro = $vjuros*round($cambio);
			$valor_total = $mzn+$mtjuro;  
			$link = $cliente->getLink();
			$dbcodigo = codigo();			
			$codigo = $dbcodigo['cdassinatura'];



					//if "email" variable is filled out, send email
			  if (isset($_REQUEST['email']))  {

			  
			  		$to = $email;
					$subject = "Pedido de $$dolar Aceite";
					$from = "Paypal Facilita <$admine>";

					// To send HTML mail, the Content-type header must be set
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					 
					// Create email headers
					$headers .= 'From: '.$from."\r\n".
					    'Reply-To: '.$from."\r\n" .
					    'X-Mailer: PHP/' . phpversion();

					    
					 
					// Compose a simple HTML email message

					    $variables = array();

						$variables['dolar'] = "$dolar";
						$variables['mz'] = "$mzn";
						$variables['email'] = "$email";
						$variables['total'] = "$valor_total";
						$variables['email-paypal'] = "$paypal_email";
						$variables['juro'] = "$vjuros";
						$variables['cambio'] = "$cambio";
						$variables['cambio_r'] = "$cambio_r";
						$variables['mtjuros'] = "$mtjuro";
						$variables['link-confir'] = "$link";
						$variables['codigo'] = "$codigo";


					$message = file_get_contents("views/email/email.html");

						foreach($variables as $key => $value)
								{
								    $message = str_replace('{{ '.$key.' }}', $value, $message);
								}
													 
					echo $message;

					if(mail($to, $subject, $message, $headers)){
					    #$aviso = 'Your mail has been sent successfully.';
					} else{
					    echo 'Unable to send email. Please try again.';
				} 
	}

		header("Location: /obrigado");
		exit();
		

}


	
	public function mandaadmin(){


			// ---------------------------------------------------------------

			$change = new Change();
			$juros = new Juros();

			$cliente = new Pusuario();
			$admine = 'elpidiochilaule@gmail.com';
			$nome = $cliente->getNome();
			$email = $cliente->getEmail();
			$paypal_email = $cliente->getPmail();
			$dolar = $cliente->getUsd();
			//$mzn = $cliente->Mt();
			//$vjuros = $juros->taxa();
			//$cambio = $change->cambio();
			//$mtjuro = $vjuros*$cambio;
			//$valor_total = $metical + $mtjuro;  



					//if "email" variable is filled out, send email
			  if (isset($_REQUEST['email']))  {

			  
			  		$to = $email;
					$subject = "Pedido de $$dolar Aceite";
					$from = "Paypal Facilita <$admine>";

					// To send HTML mail, the Content-type header must be set
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					 
					// Create email headers
					$headers .= 'From: '.$from."\r\n".
					    'Reply-To: '.$from."\r\n" .
					    'X-Mailer: PHP/' . phpversion();

					    
					 
					// Compose a simple HTML email message

					    $variables = array();

						$variables['dolar'] = "$dolar";
						//$variables['mz'] = "$mzn";
						$variables['email'] = "$email";
						//$variables['total'] = "$valor_total";
						$variables['email-paypal'] = "$paypal_email";
						//$variables['juro'] = "$vjuros";
						//$variables['cambio'] = "$cambio";
						//$variables['mtjuros'] = "$mtjuro";
						//$variables['link-confir'] = "$valor_total";


					$message = file_get_contents("views/email/email.html");

						foreach($variables as $key => $value)
								{
								    $message = str_replace('{{ '.$key.' }}', $value, $message);
								}
													 
					echo $message;

					//if(mail($to, $subject, $message, $headers)){
					    #$aviso = 'Your mail has been sent successfully.';
					//} else{
					    echo 'Unable to send email. Please try again.';
					//} 
	}

		header("Location: /obrigado");
		exit();
		

}


		
		public function MandaProof($id,$link){


			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tbpedido WHERE id = :ID", array(

				":ID"=>$id

			));

			$data = $results[0];



			$cliente = new Pusuario();
			$admin = 'elpidiochilaule@gmail.com';
			$subadmin = 'ticelpidio@gmail.com';
			$imagem = $link;
			$nome = $data['nome'];
			$apelido = $data['apelido'];
			$codigo = $data['cdassinatura'];
			$email = $data['email'];
			$paypal = $data['paypal'];
			$numero = $data['celular'];
			$usd = $data['usd'];
			$mt = $data['valortotal'];


					//if "email" variable is filled out, send email
			 	 if (isset($subadmin))  {

			  
			  		$to = $subadmin;
					$subject = "Comprovativo do Deposito";
					$from = "Paypal Facilita <$admin>";

					// To send HTML mail, the Content-type header must be set
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					 
					// Create email headers
					$headers .= 'From: '.$from."\r\n".
					    'Reply-To: '.$from."\r\n" .
					    'X-Mailer: PHP/' . phpversion();

					    
					 
					// Compose a simple HTML email message

					    $variables = array();

						$variables['imagem'] = "$imagem";
						$variables['nome'] = "$nome";
						$variables['apelido'] = "$apelido";
						$variables['email'] = "$email";
						$variables['paypal'] = "$paypal";
						$variables['usd'] = "$usd";
						$variables['mt'] = "$mt";
						$variables['codigo'] = "$codigo";
						$variables['numero'] = "$numero";
						


					$message = file_get_contents("views/email/proof.html");

						foreach($variables as $key => $value)
								{
								    $message = str_replace('{{ '.$key.' }}', $value, $message);
								}
													 
					//echo $message;

					if(mail($to, $subject, $message, $headers)){
					    $aviso = 'Your mail has been sent successfully.';
					} else{
					    echo 'Unable to send email. Please try again.';
					} 
	}


		}


}

 ?>