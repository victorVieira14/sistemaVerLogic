<?php 

	include_once 'init.php';

	$nome = isset($_POST['nome']) ? $_POST['nome']: null;
	$email = isset($_POST['email']) ? $_POST['email']: null;
	$senha = isset($_POST['senha']) ? $_POST['senha']: null;
	$telefone = isset($_POST['telefone']) ? $_POST['telefone']: null;
	$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj']: null;

	$conn = db_connect();

	$sql = "INSERT INTO users(name, email, password, cnpj, telefone) VALUES(:NOME,:EMAIL,:SENHA,:CNPJ, :TELEFONE)";

	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':NOME', $nome);
	$stmt->bindParam(':EMAIL', $email);
	$stmt->bindParam(':SENHA', $senha);
	$stmt->bindParam(':TELEFONE', $telefone);
	$stmt->bindParam(':CNPJ', $cnpj);

	if ($stmt->execute()) {
		Header('Location: form-login.php');
	}else{
		echo "erro ao cadastrar";
		print_r($stmt->erroInfo());
	}

?>