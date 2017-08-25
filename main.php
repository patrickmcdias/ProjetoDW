<!DOCTYPE html>
<html>
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

		<?php
			$com = "ping -c 4 8.8.8.8";
			$te = shell_exec($com);
				$p='<h2>Monitor</h2><div id="lda">{${te}}</div>	<button id="atu">Atualizar Monitor</button>';

			echo $p;
		?>
		</div>

		<script type="text/javascript">
			
		const testemon = document.querySelector('#lda')
		const clbtn = document.querySelector("#atu")
		const url = `http://localhost/arq.json`


		testemon.innerHTML = `<p>Teste</p>`
		/**fetch(url)
		.then(res => res.json())
		.then(tens => {
		testemon.innerHTML = `<p>Teste</p>`

		for(index of tens){
			testemon.innerHTML += `<p>${index.eruid}</p>`
			testemon.innerHTML = `<p>Teste</p>`
		}
		for(let [key, value] of Object.entries(tens)]){
			testemon.innerHTML = `<p>${key}</p><p>${value}</p>`
		}
	})
	})
	*/
		</script>
	</body>
</html>