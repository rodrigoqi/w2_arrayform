<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--Tags básicas do head-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays em PHP</title>
	<!--Link dos nossos arquivos CSS e JS padrão-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/scripts.js"></script>
	<!--Link dos arquivos CSS e JS do Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>

	<div class="container">
		
		<br>
		<div class="row text-center">
			<div class="col-md-6" id="fundo1">
				<br>
				<img src="img/fruta.jpg" class="ajustavel">
				<br>
				<br>
				<h1>Cadastro de Frutas</h1>
				<br><br>
				<form method="get" action="index.php">
					FRUTA DESEJADA<br>
					<input type="text" name="fruta" size="10" value="" placeholder="digite aqui o nome da fruta desejada"><br><br>
					<input type="submit" name="botao" value="adicionar">
					<input type="submit" name="botao" value="excluir">
					<input type="submit" name="botao" value="limpar">
					<input type="submit" name="botao" value="ordem crescente">
					<input type="submit" name="botao" value="ordem decrescente">
				</form>
				<br>
			</div>
			
			<div class="col-md-6" id="fundo2">
				<br>LISTA DE FRUTAS CADASTRADAS
				<hr style="background-color:white;">
			</div>

		</div>
		<br><br>
		<div class="row" id="alerta">
			<div class="col-md-12">

			</div>
		</div>
			
	</div>
</body>

</html>