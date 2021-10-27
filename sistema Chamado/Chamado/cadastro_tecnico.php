<?php

include 'conexao.php';

session_start();

//ESTE IF É PARA IMPEDIR QUE A PAGINA PÓS-LOGIN SEJA ACESSADA DIRETAMENTE
if(!$_SESSION['login']) {
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de técnico</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}
		#formTitulo{
			margin-top: 0px;
			background-color: #ffc107;
			color: #ffffff;
			align-items: center;
			justify-content: center;
			border-radius: 0px;
			font-weight: bold;
			font-family: 'Libre Baskerville', serif;
			height: 100px;
			display: flex;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<h4><?php echo $_SESSION['login'];?></h4>
		<a style="color: black;" id="formLogin" href="logout.php">Sair</a>
	</div>
	<h1 id="formTitulo" >Cadastrar técnico</h1>
	
	<div class="container" style="margin-top: 20px">
		<div style="text-align: left;">
		 		<a href="menu.php" role="button" class="btn" style="border-radius: 1px; border-color: black; border-radius: 5px;">Voltar</a>
		 	</div>
		<form action="_insert_tecnico.php" method="post">
			<div class="form-group">
				<label style="margin-top: 20px">Nome do técnico:</label>
				<input type="text" name="nome_tecnico" class="form-control" required autocomplete="of" placeholder="Nome completo do técnico">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email_tecnico" class="form-control" required autocomplete="of" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Nível de acesso</label>
				<select name="nivel_tecnico" class="form-control">
					<!--<optgroup>-->
						<option value="2">Técnico</option>
					<!--</optgroup>-->
				</select>
			</div>
			<div style="text-align: right;">
		 		<button type="submit" class="btn btn-warning">Cadastrar</button>
		 	</div>
		 	<?php
				$login = $_SESSION['login'];

				$sql = "SELECT * FROM `tb_usuario` WHERE login = '$login'";
		    	$busca1 			= 	mysqli_query($conexao,$sql);
		    	$array1 			= 	mysqli_fetch_array($busca1);
		    	$nome_resp 			=	$array1['nome_user'];
		    	$id_user			=	$array1['id_user'];
			
			?>
			<input type="text" name="nome_resp" readonly="" style="display: none;" value="<?php echo $nome_resp ?>">
		</form>
		
	</div>





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>	