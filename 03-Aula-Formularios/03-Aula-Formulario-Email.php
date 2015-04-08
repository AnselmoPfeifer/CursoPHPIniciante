<?php 
	//Para verificar se o botao envia foi clicado
	if(isset($_POST['enviar'])){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$assunto = $_POST['assunto'];
		$mensagem = $_POST['menssagem'];
		$para = "contato@anselmopfeifer.com";
		if (mail($para, $assunto, $mensagem, "From: $email\n")) {
			echo "<p>Sua mensagem foi enviada com sucesso</p>";
		}else{
			echo "Erro ao enviar Email";
		}
		
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
		Nome: <br><input type="text" name="nome" size="30" maxlength="100" required/><br>
		Email: <br><input type="text" name="email" size="30" maxlength="100" required/><br>
		Assunto: <br><input type="text" name="assunto" size="30" maxlength="100" required/><br>
		Mensagem: <br><textarea name="mensagem" rows="10" cols="29" required/></textarea><br>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>