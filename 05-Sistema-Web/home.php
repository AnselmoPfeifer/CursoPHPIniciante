<?php
	require_once ('paginas/variaveis.php');
	$p = $_GET['p'];
	if (empty($p)){
		$pagina = 'home';
	}else{
		$pagina = $p;
	}
	if(!file_exists('paginas/'.$pagina.'.php')){
		$pagina = "Pagina nao encontrada";
	}
	include ("header.php");
	include ("menu.php");
?>
<div id="conteudo">
	<?php 
	if(file_exists('paginas/'.$pagina.'.php')){
		include ("paginas/$pagina.php");
	}else{
		echo "A pagina nao existe!!!";
	}
	?>
</div><!-- Final da Conteudo -->
<?php 
include ("sidebar.php");
include ("footer.php");
?>