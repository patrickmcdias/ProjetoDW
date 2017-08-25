<?php
	include_once 'php/conexao.php';
	//conectar();
	//@session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>WebAudit</title>
		<link rel="stylesheet" type="text/css" href="project.css">
	</head>
	<body>
	    <div>
	    <header><h1>WebAudit</h1></header>
		<main>
			<form action="" method="POST" enctype="multipart/form-data">
				<input type="text" name="login" id="login" placeholder="Login">
				<input type="password" name="senha" id="senha" placeholder="Senha">
				<input type="submit" value="entrar">
				<input type="hidden" name="entrar" value="en">
			</form>
		</main>
		</div>

		<?php

			if(isset($_POST["entrar"]) && isset($_POST["entrar"]) == "en"){
				$login= $_POST["login"];
				$senha=$_POST["senha"];

			if(empty($login) || empty($senha)){
				echo"Preencha todos os campos";

			}else{
				$query = "SELECT login, senha from audit_login where login = '$login' and senha='$senha'";
				$result = mysqli_query($con,$query);

				//echo $result;
				//$busca = mysqli_fech_assoc($result);
				//$linha = mysqli_fech_assoc($result);
				//$row = mysqli_fetch_array($result, mysqli_assoc());
				//echo $busca['login'];
				//echo $query;
				$re =mysqli_fetch_assoc($result);

			if(isset($re)){
				@session_start();
				$_SESSION['login'] = $login;
				$_SESSION['senha'] = $senha;
				header('Location:main.php');
				exit;
			}else {
				echo "Usuário ou senha invalidos";
				}

			}
		}
			?>
	</body>
</html>