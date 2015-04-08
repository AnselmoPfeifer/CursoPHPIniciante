
<?php
$nome = $_POST['nome'];
$digitado = $_GET['digitado'];
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>03-Aula-Enviar-Email</title>
</head>
<body>
	<?php
		echo 'Ola '.$nome;
		echo ('<br><br>');	
		echo ('O Valor atribuido o metodo get eh: '.$digitado);
	?>
</body>
</html>