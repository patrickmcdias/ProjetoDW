<!DOCTYPE html>
<html>
<?php

			$sevmon = shell_exec('php -S localhost:8080 moint.php');
			//$monito = shell_exec('php -S localhost:8081 monit.php');
		?>
	<head>
		<title>WebAudit</title>
		<link rel="stylesheet" type="text/css" href="mainStyle.css">
	</head>
	<body>
		<div id="all">
			<header><h1>WebAudit</h1></header>
			<div id="ldb">
				<div id="int"></div>
				<button id="moni">Colocar interface em Monitor</button>
				<input type="text" name="mac" placeholder="Digite o Mac Address da Rede">
				<input type="text" name="canal" placeholder="Digite o canal que ela utiliza">
				<input type="submit" name="canin" value="Enviar">

			</div>
			<h2>Monitor</h2>
			<div id="lda"></div>	
			<button id="atu">Atualizar Monitor</button>

		</div>

		<script type="text/javascript">
			
		const testemon = document.querySelector('#lda')
		const inte = document.querySelector('#int')
		const clbtn = document.querySelector("#atu")
		const mobtn = document.querySelector("#moni")
		const url = `http://localhost:8080`
		//const url2 = `http://localhost:8081`

		//let rec
		//testemon.innerHTML = `<p>Pegou</p>`

		mobtn.addEventListener('click',function(){
		fetch(url)
		.then(res => res.json())
		.then(tens => {
			for(let [key, value] of Object.entries(tens)){
			rec += `<p>${key}</p><p>${value}</p>`
		}

		inte.innerHTML = rec 
	})
		})

		clbtn.addEventListener('click',function(){
		fetch(url2)
		.then(res2 => res.json())
		.then(tens2 => {
			for(let [key, value] of Object.entries(tens2)){
			resp += `<p>${key}</p><p>${value}</p>`
		}
		testemon.innerHTML = resp 
	})
		})
	
		</script>
	</body>
</html>