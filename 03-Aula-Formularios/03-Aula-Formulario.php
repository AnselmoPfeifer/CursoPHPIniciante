<?php 
//Para recuperar dados na mesma pagina
	if(isset($_POST['enviar'])){
		$nome = $_POST['nome'];
		echo 'Ola ' .$nome. '<br>';
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>03-Aula-Enviar-Email</title>
</head>
<body>
	<form action="" method="post">
	<!--Para Outra pagina<form action="03-Aula-Enviar-Email.php" method="post">-->
		<input type="text" name="nome" size="40" maxlength="100">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<p><a href="03-Aula-Enviar-Email.php?digitado=O Valor que vem de GET">Imprimir valor pelo metodo Get</a></p>
</body>
</html>