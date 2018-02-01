<?php 

/*	


*/

namespace Hcode\Model;

use Hcode\Change;
use Hcode\Model;
use Hcode\Juros;
use Hcode\DB\Sql;
use PDO;
use data;

class Pusuario extends Model {
private $nome;
private $apelido;
private $sexo;
private $bi;
private $cidade;
private $usd;
private $email;
private $mt;
private $celular;
private $pmail;
private $link ;


public function getCelular(){

	$this->celular = $_POST['celular'];

	return $this->celular;
}

public function setCelular($value){
	$this->celular = $value;
}

public function getPmail(){

	$this->pmail = $_POST['pmail'];

	return $this->pmail;
}

public function setPmail($value){
	$this->pmail = $value;
}

public function getCidade(){

	$this->cidade = $_POST['cidade'];

	return $this->cidade;
}

public function setCidade($value){
	$this->cidade = $value;
}

public function getBi(){

	$this->bi = $_POST['bi'];

	return $this->bi;
}

public function setBi($value){
	$this->bi = $value;
}

public function getNome(){

	$this->nome = $_POST['nome'];

	return $this->nome;
}

public function setNome($value){
	$this->nome = $value;
}

public function getApelido(){

	$this->apelido = $_POST['apelido'];

	return $this->apelido;
}

public function setApelido($value){
	$this->apelido = $value;
}

public function getSexo(){

	$this->sexo = $_POST['sexo'];

	return $this->sexo;
}

public function setSexo($value){

	$this->sexo = $value;
}

public function getUsd(){

	$this->usd = $_POST['usd'];

	return $this->usd;
}

public function setUsd($value){

	$this->usd = $value;
}

public function getEmail(){

	$this->email = $_POST['email'];

	return $this->email;
}

public function setEmail($value){

	$this->email = $value;
}

public function getLink(){

	$this->link = Pusuario::geradordelink();

	return $this->link;
}

public function setLink($value){

	$this->link = $value;
}


public function getData(){

	$datanow = date('Y-m-d H:i:s');

	$data = hexdec( substr(sha1("$datanow"), 0, 5) );


	return $data;
}




public static function listPedidos()
	{
		$sql = new Sql();
		
		return $sql->select("SELECT * FROM tbpedido ORDER BY dtcadastro desc");
	}

	public function Comprovativo($email){

		$sql = new Sql();

		$results = $sql->select("SELECT images.image FROM images WHERE paypal = :EMAIL", array(

			":EMAIL"=>$email

		));

		$this->setData($results[0]);

	}


	public function get($id)
		{
			$sql = new Sql();

		$results = $sql->select("SELECT * FROM tbpedido WHERE id = :id", array(
				":id"=>$id
				));


		$this->setData($results[0]);

		}



		const SESSION = "User";
		const SECRET = "HcodePHP7_Secret"; //key encrypt



	public static function login($login, $password) {

			$sql = new Sql();
			$results = $sql->select("SELECT * FROM admins WHERE login = :LOGIN", array(
				":LOGIN"=>$login

				));

			if(count($results) === 0)
			{
				throw new \Exception("Nenhum usuário encontrado.", 1);
				
			}

			$data = $results[0];

			//verificar senha
			if (password_verify($password, $data["password"]) === true)
			{
				$user = new Pusuario();

				$user->setData($data);

				$_SESSION[Pusuario::SESSION] = $user->getValues();

				return $user;




			} else 
			{
				throw new Exception("Nenhum usuário encontrado.", 1);
				
			}

		}


		public static function verifyLogin($inadmin = true)
		{
			if (
				!isset($_SESSION[Pusuario::SESSION]) 
				|| 
				!$_SESSION[Pusuario::SESSION] 
				|| 
				!(int)$_SESSION[Pusuario::SESSION]["id"] > 0 
				||
				(bool)$_SESSION[Pusuario::SESSION]["inadmin"] !== $inadmin
			)	{
				header("Location: /admin/login");
				exit;
				}

		}



public static function listCompletados()
	{
		$sql = new Sql();
		
		return $sql->select("SELECT * FROM tbcompletados ORDER BY dtcadastro desc");
	}

	public function moverDados(){

		$id = $this->getid();

		$conn = new PDO("mysql:host=localhost;dbname=test", "root", "");

		$stmt = $conn->prepare("INSERT INTO tbcompletados (nome, apelido,cidade,usd,valortotal,cdassinatura,email,paypal,celular,dtcadastro) SELECT nome,apelido,cidade,usd,valortotal,cdassinatura,email,paypal,celular,dtcadastro FROM tbpedido WHERE (id= :id); DELETE FROM tbpedido WHERE (id= :id);
");
		$stmt->bindParam(":id",$id);

		return $stmt->execute();

		/*
		$sql = new Sql();

		return $sql->query("INSERT INTO tbcompletados (nome, apelido, cidade, usd,valortotal,cdassinatura,link,email,paypal,celular,dtcadastro), SELECT nome, apelido, cidade,usd,valortotal,cdassinatura,link,email,paypal,celular,dtcadastro FROM tbpedido WHERE (id= :id)
", array(

	"id"=>$id

	)); 

	*/

	}



/* public function setData($data){

		$this->setNome($data['nome']);
		$this->setApelido($data['apelido']);
		$this->setCidade($data['cidade']);
		$this->setUsd($data['usd']);
		$this->setCidade($data['cidade']);
		$this->setEmail($data['email']);


} */


public function __toString(){
	return json_encode(array(
		"nome"=>$this->getNome(),
		"apelido"=>$this->getApelido(),
		"usd"=>$this->getUsd(),
		"cidade"=>$this->getCidade(),
		"email"=>$this->getEmail()



	));
}

public static function geradordelink(){

	$data1 = new Pusuario();

	$data = $data1->pinsert();
	//$data = $data1->insert();

	$id = $data['id'];

		$code = base64_encode($id);

		$link = $code;
	 
	
 				$links = "http://paypalmz.net/cliente/proof/send?link=$link";


 				return $links;
}



public static function sendproof($dec){

	$Sql = new Sql();

	$results = $Sql->select("SELECT * FROM tbpedido WHERE id = :ID", array(

		":ID"=>$dec

	));

	$data = $results[0];

	return $data;

}


 public static function descpriplink($dados){

		
	return $code = base64_decode($dados);
 }


public function Mt(){

	$conversao = new Change();

	$cambio = $conversao->cambio();

	$dolar = $this->getUsd();

	$mzn = $dolar*round($cambio);

	return $mzn;
} 


public function pinsert(){
	$juros = new Juros();
	$change = new Change();

	 $mznjuros = $juros->taxa()*round($change->cambio());

	//$mznjuros = $juros->taxa()*$change->cambio();

	$sql = new Sql();

	$data = $this->getData();


	$results = $sql->select("CALL sp_pedido_insert(:NOME, :APELIDO, :CIDADE, :USD, :VALORTOTAL, :CDASSINATURA, :EMAIL, :PAYPAL)",array(
			":NOME"=>$this->getNome(),
			":APELIDO"=>$this->getApelido(),
			":CIDADE"=>$this->getCidade(),
			":USD"=>$this->getUsd(),
			":VALORTOTAL"=>$mznjuros+$this->Mt(),
			":CDASSINATURA"=>"$data",
			":EMAIL"=>$this->getEmail(),
			":PAYPAL"=>$this->getPmail()

	));

	if (count($results) > 0){

		$this->setData($results[0]);
	}

	$id = $results[0];

	return $id;
}



public function getPedidos($cid){

	$id = $this->loadById($cid);

	return $id;

	}



public function insert(){
	$juros = new Juros();
	$change = new Change();

	 $mznjuros = $juros->taxa()*round($change->cambio());


	//$mznjuros = $juros->taxa()*$change->cambio();

	$sql = new Sql();

	$results = $sql->select("CALL sp_usuario_insert(:NOME, :APELIDO, :BI, :SEXO, :CIDADE, :USD, :MZN, :JUROS, :CAMBIO, :MZNJUROS, :VALORTOTAL, :CDASSINATURA, :EMAIL, :PAYPAL)",array(
			":NOME"=>$this->getNome(),
			":APELIDO"=>$this->getApelido(),
			":BI"=>$this->getBi(),
			":SEXO"=>$this->getSexo(),
			":CIDADE"=>$this->getCidade(),
			":USD"=>$this->getUsd(),
			":MZN"=>$this->Mt(),
			":JUROS"=>$juros->taxa(),
			":CAMBIO"=>$change->cambio(),
			":MZNJUROS"=>$juros->taxa()*round($change->cambio()),
			":VALORTOTAL"=>$mznjuros+$this->Mt(),
			":CDASSINATURA"=>$this->getData(),
			":EMAIL"=>$this->getEmail(),
			":PAYPAL"=>$this->getPmail()

	));

	
}




}


 ?>