<?php
//$conexao ='localhost';
//$usuario ='root';
//$senha =  null;
//$dbname='login_web';


//function conectar(){
$con = mysqli_connect('localhost', 'root', 'root', 'login_web') or die(mysqli_connect_error()); 
	//$conec = @mysql_connect('localhost','root', 'root') or die mysql_error();
	//mysql_select_db('login_web') or die mysql_error();
//}

?>