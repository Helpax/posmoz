<?php 

session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageRegiste;
use \Hcode\PageObrigado;
use \Hcode\PageList;
use \Hcode\PageAdmin;
use \Hcode\Memail;
use \Hcode\Model\User;
use \Hcode\DB\Sql;
use \Hcode\Model\Pusuario;
use \Hcode\Model\Pedido;
use Hcode\Change;
use Hcode\Juros;
use Hcode\Upload;
use Hcode\Glink;


	$app = new Slim();

	$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");


});


$app->get('/registar', function(){

	$page = new PageRegiste([
		"header"=>false,
		"footer"=>false
	]);
	$page->setTpl("registar");

});
 

$app->get('/pedido', function(){

	$usuario = new Pusuario();

	// sem efeito 

});

$app->get('/obrigado', function(){

	$page = new PageObrigado([
		"header"=>false,
		"footer"=>false
	]);
	$page->setTpl("obrigado");

});

$app->get('/admin/pedidos', function(){

	//verifica se está logado
		Pusuario::verifyLogin();

	$users = Pusuario::listPedidos();

	$user = new Pusuario();
	$email = 'elpidiochilaule@gmail.com';


	$cmp = $user->Comprovativo($email);

	$page = new PageAdmin();


	$page->setTpl("users", array(
		"users"=>$users
	));

	});

$app->get('/admin/completados', function(){

	//verifica se está logado
		Pusuario::verifyLogin();

	$users = Pusuario::listCompletados();

	$page = new PageAdmin();

	$page->setTpl("completados", array(
		"users"=>$users

	));

	});

$app->get("/admin/pedido/mover/:id", function($id){
	//verifica se está logado
		Pusuario::verifyLogin();


	$user = new Pusuario();

	$user->get((int)$id);

	$user->moverDados();


	header("Location: /admin/pedidos");

	exit();


	});

	
	$app->get("/cliente/proof/send-error", function(){

 	
 	$page = new PageRegiste([
 		"header"=>false,
 		"footer"=>false
 	]);


 	$page->setTpl("send-faild"); 


 
 });

	

	$app->get("/cliente/proof/send", function(){
 
 	$domain = $_SERVER['SERVER_NAME'];

	$link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

 	$code = $_GET['link'];

 	$dec = Pusuario::descpriplink($code);

 	$nome = Pusuario::sendproof($dec);
 	
 	$page = new PageRegiste([
 		"header"=>false,
 		"footer"=>false
 	]);
 
 	$page->setTpl("teste" , array(
 		"code"=>$code,
 		"dominio"=>$domain,
 		"link"=>$link
 	)); 


 
 });


	$app->post("/cliente/proof/sucess", function(){

		$manda = new Memail();
		$upload = new Upload();

 	$code = $_GET['link'];

 	$codigo = $code;
 	

 	$data = $_POST['enviar'];
 	$link = $_POST['link'];
 	$img = $_FILES['imagem'];
 	$domain = $_SERVER['SERVER_NAME'];

 	$dec = Pusuario::descpriplink($code);

 	$dados = Pusuario::sendproof($dec);

 	$imagem = $upload->Enviarproof($img,$data,$dados,$link);	

 	$page = new PageRegiste([
 		"header"=>false,
 		"footer"=>false
 	]);
 
 	$page->setTpl("sucesso" , array(
 		"img"=>$imagem,
 		"dominio"=>$domain
 	)); 

 	$manda->MandaProof($dec,$imagem);

 
 });

	
	$app->get("/admin", function(){

		//verifica se está logado
		Pusuario::verifyLogin();

	$users = Pusuario::listCompletados();
		

	$page = new PageAdmin();


	$page->setTpl("index", array(
		"users"=>$users

	));


	});


		

$app->get("/admin/login", function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false

		]);

	$page->setTpl("login");


	});


$app->post('/admin/login', function() {


	$user = Pusuario::login($_POST["login"], $_POST["password"]);

	header("Location: /admin");
	exit; 

});


$app->post('/pedido', function(){


	$mandar = new Memail();

	$usuario = new Pusuario();

	$nome = $usuario->getNome();
	$apelido = $usuario->getApelido();
	$bi = $usuario->getBi();
	$cidade = $usuario->getCidade();
	$sexo = $usuario->getSexo();
	$email = $usuario->getEmail();
	$celular = $usuario->getCelular();
	$usd = $usuario->getUsd();
	$pmail = $usuario->getPmail();
	$mt = $usuario->Mt();
	$total = $usuario->valap();
	$mandar->manda();
	  

	
});



$app->run();

 ?>