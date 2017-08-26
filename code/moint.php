
		<?php
			$response = shell_exec('./info-mon.sh');
			//$test = shell_exec('./info-adpt.sh');
			//header('Content-Type: apllication/json');
			header('Access-Control-Allow-Origin: *');

			//$ph = shell_exec('php main.php');
			echo $response;
		?>