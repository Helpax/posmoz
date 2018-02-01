<?php

	class ListPedidos 
	{
		
		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "test";

		public function listAll(){

				// Create connection
				$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT * FROM tbpedido";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " . $row["apelido"]." ". $row["cidade"]." ". $row["usd"]." ". $row["valortotal"]." ". $row["link"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}
				$conn->close();

				return $row['nome'];
		
		}

	}


	$data = new ListPedidos();

	$datas = $data->listAll();

	echo $datas;

?>