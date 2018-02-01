<?php 
	
namespace Hcode;


	use Hcode\Model\Pusuario;
	use Hcode\Model;
	use Rain\Tpl;
	use Hcode\Change;
	use Hcode\Juros;
	use Hcode\DB\Sql;

	/**
	* 
	*/
	class Upload extends Model
	{

		public function Enviarproof($img,$data,$dados,$link){

			$image = $img;

		if(isset($data))
			{
			  $target_dir = "proof/img/";
			  $filename = explode('.',$image['name']);
			  $ext = $filename[1];
			  $imgname = time().'.'.$ext;
			  $target_file = $target_dir . $imgname ;

			  $uploadOk = 1;
			  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			  // Check if image file is a actual image or fake image
			  $check = getimagesize($image["tmp_name"]);
			  if($check !== false) {
			    $text="File is an image - " . $check["mime"] . ".";
			    $uploadOk = 1;
			  } else {
			    $text="File is not an image.";
			    $uploadOk = 0;
			  }
			  // Check if file already exists
			  if(file_exists($target_file)) {
			    $text="Sorry, file already exists.";
			    $uploadOk = 0;
			  }
			  // Check file size
			  if($image["size"] > 2000000) {
			    $text="Sorry, your file is too large.";
			    $uploadOk = 0;
			  }
			  // Allow certain file formats
			  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			  && $imageFileType != "gif" && $imageFileType != "bmp" ) {
			    echo "Sorry, only JPG, JPEG, PNG, GIF & BMP files are allowed.";
			    $uploadOk = 0;
			  }
			 
			  // if everything is ok, try to upload file
			  }
			    if (move_uploaded_file($image["tmp_name"], $target_file)) {
			      $path=$imgname;

			      $sql = new Sql();

			      	$nome = $dados['nome'];
			       	$paypal = $dados['paypal'];
			      	$valortotal = $dados['valortotal'];

			      	$results0 = $sql->select("SELECT * FROM images WHERE link = ('$link')");


					if (count($results0) > 2){

							
						header("Location: /cliente/proof/send-error");

						exit();

						}


				if (count($results0) < 2){


					$results = $sql->query("INSERT INTO images (nome,image,valortotal,paypal,link)VALUES ('$nome','$path','$valortotal','$paypal','$link')");
			      $_SESSION["Success"]='Image Is Upload Success...';
					
				}



			      
			      //header("Location:display.php"); /* Redirect browser */
			      //exit();
			    } else {
			      $_SESSION["err"]=$text;
			      //header("Location:display.php"); /* Redirect browser */
			      exit();
			    }
			  

			    	return $target_file;


				}



}




 ?>