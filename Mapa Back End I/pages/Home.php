<?php

if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
				$pagina = $_GET["pagina"];
				include ($pagina);
			} else {
				include ('produtos.php');
				
			}
		?>

<style>
.car-produto{
	width: 200px;
	text-align: center;
	margin: 30px;,

}

.car-produto img{
	width: 200px;
	height: 200px;
	border-radius: 100px;
}
	
</style>

<?php
	foreach ($produtos as $produto):
?>

<div class="car-produto">
	<img src="<?php echo $produto['imagem']?>">
	<h3><?php echo $produto['nome']?></h3>

</div>

<?php 
endforeach
?>


