<?php
require_once('bootstrap.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome'], ENT_QUOTES) : '';
	$email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : '';
	$senha = isset($_POST['senha']) ? htmlspecialchars($_POST['senha'], ENT_QUOTES) : '';
	$cSenha = isset($_POST['cSenha']) ? htmlspecialchars($_POST['cSenha'], ENT_QUOTES) : '';
	$termos = isset($_POST['termos']) ? htmlspecialchars($_POST['termos'], ENT_QUOTES) : '';

	if (empty($nome) || empty($email) || empty($senha) || empty($cSenha) || empty($termos)) {
		echo "<script>window.alert('Preencha todos os campos.')</script>";
		exit();
	}

	if (strlen($senha) < 6) {
		echo "<script>window.alert('Sua senha deve ter pelo menos 6 caracteres.')</script>";
		exit();
	}

	if ($senha !== $cSenha) {
		echo "<script>window.alert('As senhas devem ser iguais.')</script>";
		exit();
	}

	$select = mysqli_query($connect, "SELECT * FROM users WHERE email='$email'");
	$verify = mysqli_num_rows($select);

	if ($verify > 0) {
		echo "<script>window.alert('E-mail já cadastrado.')</script>";
		exit();
	}

	$data = date("Y:m:d-H:i:s");
	$ip = $_SERVER['REMOTE_ADDR'];
	$criptoSenha = hash('SHA256', $senha);

	$sqli = mysqli_query($connect, "INSERT INTO users (user, email, senha, ip, data) VALUES ('$nome', '$email', '$criptoSenha', '$ip', '$data')");

	echo "<meta http-equiv='refresh' content='0;forms.php?q=true'>";
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Estudando HTML">
	<title>Cadastro</title>
	<link rel="stylesheet" href="estilos.css">
</head>

<body>
	<center>
		<h1>Registrar</h1>
		<form action="" method="post" name="">
			Nome completo:
			<input type="text" name="nome" class="nome" required placeholder="Ex: Gabriel Gonçalves Galvão"><br>
			E-Mail:
			<input type="email" name="email" class="email" required placeholder="Digite um endereço de e-mail válido"><br>
			Senha:
			<input type="password" name="senha" class="senha" required autocomplete="off" placeholder="A senha deve ter pelo menos 6 caracteres"><br>
			Confirmar senha:
			<input type="password" name="cSenha" class="cSenha" required autocomplete="off" placeholder="Digite novamente a senha"><br>
			Você aceita os termos?
			<input type="checkbox" name="termos" required><br>
			<button type="submit">Enviar</button>
		</form>
	</center>
</body>

</html>