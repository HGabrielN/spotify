<?php
	        include "conecta.inc.php";

            $nick = $_POST['nick'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			 
	

			$db = "INSERT INTO cadastro(email,senha,nick) VALUES ('$email','$senha','$nick');";
			
 			$query = mysqli_query($conexao,$db);

			if($query){
				echo "<h4>Dados enviados com sucessso!</h4></center>";
		
		    }else{
		    	echo "<center><h4>Não foi possível enviar o e-mail. <a href=index.php?pg=inscrever-se.php>Tente novamente.</a></h4></center>";
			}
				 
?>