<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="http://<?php echo htmlspecialchars( $dominio, ENT_COMPAT, 'UTF-8', FALSE ); ?>/res/site/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://<?php echo htmlspecialchars( $dominio, ENT_COMPAT, 'UTF-8', FALSE ); ?>/res/site/fontwn/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://<?php echo htmlspecialchars( $dominio, ENT_COMPAT, 'UTF-8', FALSE ); ?>/res/site/estilo.css">
	
	<title>Teste</title>


	<style>
		

		.navbar-default.menu{

			background-color: rgb(25, 23, 23)!important;
			top: 0!important;
    		border-width: 0 0 1px!important;
		}

		input[type="file"] {
		    font-size: 19px;
		    padding: 10px;
		    background-color: #2eb5ae;
		    color: #ffffff;
		}

		section.send{

			display: block;
		}

		input[type="submit"] {
		    padding: 10px;
		    background-color: #191717;
		    color: #fff;
		    border-radius: 5px;
		    font-size: 18px;
		    border-style: none;
		    margin-top: 5px;
		    transition: 0.5s;
		    padding-left: 4%;
		    padding-right: 4%;
		}

		}

		input[type="submit"]:hover {
		    padding: 10px;
		    background-color: #2eb5ae!important;
		    color: #fff;
		    border-radius: 5px;
		    font-size: 18px;
		    border-style: none;
		    margin-top: 5px;
		    transition: 0.5s;
		    padding-left: 4%;
		    padding-right: 4%;
		}

		.image img{

			display: block;
			margin: 0 auto;	
		}

		form{

			display: inline-grid;
			margin: 0 auto;
			text-align: center;
		}

		.col-sm-6.send {
		    display: flex;
		}

		h1{

			margin-bottom: 22px;
			text-transform: uppercase;
		}

	</style>

</head>
<body>

	<header>
<!-- Inicio do Menu Head -->

<nav class="navbar navbar-default menu">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header logo">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">COMOZ</a>
    </div>

    

  </div><!-- /.container-fluid -->
</nav>

</header>

	<div class="container">


			<div class="row">
				
				<div class="col-sm-3"></div>
				<div class="col-sm-6 image">
					
					<img class="img-responsive" src="http://<?php echo htmlspecialchars( $dominio, ENT_COMPAT, 'UTF-8', FALSE ); ?>/res/site/img/iconup.png">
				</div>
				<div class="col-sm-3"></div>
			</div>

			<div class="row"> 

			<div class="col-sm-3"></div>
			<div class="col-sm-6">

			<h1 align="center" >Clique em escolher ficheiro para carregar a Imagem do comprovativo!!!</h1>

			</div>

			<div class="col-sm-3"></div>


			</div>

		<div class="row">

			<div class="col-sm-3"></div>
			<div class="col-sm-6 send">

			<form class="img" method="post" action="/cliente/proof/sucess?link=<?php echo htmlspecialchars( $code, ENT_COMPAT, 'UTF-8', FALSE ); ?>" enctype="multipart/form-data"> 
				<input type="file" name="imagem">
				<input type="hidden" name="link" value="<?php echo htmlspecialchars( $link, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
				<input type="submit" name="enviar" value="Enviar">
			</form>

			</div>

			<div class="col-sm-3"></div>


		</div>

	</div>

</body>
</html>