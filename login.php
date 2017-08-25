<?php

			if(isset($_POST["entrar"])){
				$login= $_POST["login"];
				$senha=$_POST["senha"];

			if(empty($login) || empty($senha)){
				echo"Preencha todos os campos";

			}else{
				//$query = "SELECT login, senha from audit_login where login = '$login' and senha='$senha'";
				$result = mysqli_query('login_web',"SELECT login, senha from audit_login where login = '$login' and senha='$senha'");

				//echo $result;
				//$busca = mysqli_fech_assoc($result);
				//$linha = mysqli_fech_assoc($result);
				//$row = mysqli_fetch_array($result, mysqli_assoc());
				//echo $busca['login'];
				//echo $query;

			if(mysqli_num_rows($result) > 0){
				$_SESSION['login'] = $login;
				$_SESSION['senha'] = $senha;
				header('Location:teste.php');
				exit;
			}else {
				echo "Usuário ou senha invalidos";
				}

			}
		}
			?>