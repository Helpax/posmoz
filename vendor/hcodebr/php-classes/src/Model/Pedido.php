<?php 

namespace Hcode\Model;

use Hcode\Change;
use Hcode\Juros;
use Hcode\DB\Sql;


/**
* 
*/
class Pedido 
{
	
	private $nome;
	private $apelido;
	private $cidade;
	private $usd;
	private $email;
	private $mt;
	private $css;
	private $paypal;
	private $valt;
	private $link;
	private $dt;
	private $pmail;
	private $id;




		public function getPmail(){


			return $this->pmail;
		}

		public function setPmail($value){
			$this->pmail = $value;
		}

		public function getCidade(){


			return $this->cidade;
		}

		public function setCidade($value){
			$this->cidade = $value;
		}

		public function getBi(){


			return $this->bi;
		}

		public function setBi($value){
			$this->bi = $value;
		}

		public function getNome(){


			return $this->nome;
		}

		public function setNome($value){
			$this->nome = $value;
		}

		public function getApelido(){


			return $this->apelido;
		}

		public function setApelido($value){
			$this->apelido = $value;
		}

		public function getSexo(){


			return $this->sexo;
		}

		public function setSexo($value){

			$this->sexo = $value;
		}

		public function getUsd(){


			return $this->usd;
		}

		public function setUsd($value){

			$this->usd = $value;
		}

		public function getEmail(){


			return $this->email;
		}

		public function setEmail($value){

			$this->email = $value;
		}


		public function getValt(){


			return $this->valt;
		}

		public function setValt($value){

			$this->valt = $value;
		}

		public function getLink(){


			return $this->link;
		}

		public function setLink($value){

			$this->link = $value;
		}

		public function getPaypal(){


			return $this->paypal;
		}

		public function setPaypal($value){

			$this->paypal = $value;
		}

		public function getCss(){


			return $this->css;
		}

		public function setCss($value){

			$this->css = $value;
		}

		public function getId(){


			return $this->id;
		}

		public function setId($value){

			$this->id = $value;
		}

		public function getDt(){


			return $this->dt;
		}

		public function setDt($value){

			$this->dt = $value;
		}




		public function loadById(){
			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tbpedido ");

			if (count($results) > 0) {

				$data = $results[0];

				$this->setId($data['id']);
				$this->setNome($data['nome']);
				$this->setApelido($data['apelido']);
				$this->setCidade($data['cidade']);
				$this->setUsd($data['usd']);
				$this->setValt($data['valortotal']);
				$this->setCss($data['cdassinatura']);
				$this->setLink($data['link']);
				$this->setEmail($data['email']);								
				$this->setPaypal($data['paypal']);
				$this->setDt($data['dtcadastro']);

				//var_dump($data);
			}

			//exit();

			return json_encode(array(

					"id"=>$this->getId(),
					"nome"=>$this->getNome(),
					"apelido"=>$this->getApelido(),
					"cidade"=>$this->getCidade(),		
					"usd"=>$this->getUsd(),
					"valortotal"=>$this->getValt(),
					"cdassinatura"=>$this->getCss(),
					"link"=>$this->getLink(),
					"email"=>$this->getEmail(),
					"paypal"=>$this->getPaypal(),
					"dtcadastro"=>$this->getDt()

					));

		}

		public function __toString(){
			return json_encode(array(

					"id"=>$this->getId(),
					"nome"=>$this->getNome(),
					"apelido"=>$this->getApelido(),
					"cidade"=>$this->getCidade(),		
					"usd"=>$this->getUsd(),
					"valortotal"=>$this->getValt(),
					"cdassinatura"=>$this->getCss(),
					"link"=>$this->getLink(),
					"email"=>$this->getEmail(),
					"paypal"=>$this->getPaypal(),
					"dtcadastro"=>$this->getDt()

					));
			}

}









 ?>