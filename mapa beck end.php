<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Doces Boa Vista</title>
		<style> 
		body {
		margin: 0;	
		}
	header {
		height: 100px;
		background-color:  #FFDAB9;
		text-align: center;
		padding: 10px;
	}	

	.logo {
		height: 20 px;
	}

	nav {
		background-color: #FF6347;
		margin: 0;
	}
	nav ul {
		list-style: none;
		width: 100%;
		margin: 0px;
		padding: 0px;
		display: flex;
		justify-content: center;
	}
	nav ul li {
		padding-top: 12px;
		padding-left: 25px;
		padding-right:25px ;
		padding-bottom:12px ;
		
	}

	.content{
		min-height: 400px;
	}
	footer {
		background-color: #FF6347 ;
		min-height: 60px;
		padding: 40px;
	}
	.container{
		max-width: 800px;
		display: flex;
		margin: auto;
		padding-top: 20px;
		flex-wrap: wrap;


	}

	</style>		

</head>
<body>
	<header>
		<img width="245 px" src="https://www.docesboavista.com.br//img/logo.png" alt="Logo" class="logo">

	</header>
	<nav>

		<ul>
			<li> Home</li>
			<li> Quem Somos</li>
			<li> Contato</li>
			<li> Localização</li>
		</ul>


	</nav>
	<div class= "content">
		<div class="container">			
			
			
				<?php
				$page = "home.php";

				if(isset($_GET['page'])){

				if(file_exists("pages/".$_GET['page'].".php")){
						$page = $_GET['page'];	

						}
					}
					
					include("home.php.");
		?>

						
		</div>
		
	</div >
	<footer>
		RA => 200177225
	</br>
	NOME => MICHAEL SOCORRO SALDANHA
	</footer>		
		
</body>
</html>