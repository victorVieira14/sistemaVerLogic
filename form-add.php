<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		
	</style>
</head>
<body>

	<?php 

		include_once 'headerNaoLogado.php';

	?>

	<h2 class="text-white h1 mt-5 mb-2"><i style="color:#27408B;">Faça seu cadastro <b>na verLogic</b></i></h2>


	<div class="container text-center mt-5">
		

		<form method="POST" action="addUser.php">


			<div class="row">

				<div class="col-sm-12 md-12 lg-12">
					<img src="img/user.jpg" width="250" height="250" class="circle mx-auto d-block mx-auto mb-5" alt="usuario" title="Adicionar foto">
				</div>


				<div class="col-sm-12 md-12 lg-12">
					<div class="row">
						<div class="input-field col s6">

							<i class="material-icons prefix fas fa-user-tie mt-2" style="color:#27408B;"></i>
							<input name="nome" id="icon_prefix" type="text" require="" class="validate">
							<label for="icon_prefix" style="font-size:20px;">Nome</label>
						</div>
						<div class="input-field col s6">

							<i class="material-icons prefix fas fa-phone-square mt-2" style="color:#27408B;"></i>
							<input name="telefone" id="icon_prefix_tel" type="text" require="" class="validate">
							<label for="icon_prefix_tel" style="font-size:20px;">Telefone</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 md-12 lg-12">
					<div class="row">
						<div class="input-field col s6">
	
							<i class="material-icons prefix fas fa-envelope-open-text mt-2" style="color:#27408B;"></i>
							<input name="email" id="icon_prefix_email" type="email" require="" class="validate">
							<label for="icon_prefix_email" style="font-size:20px;">Email</label>
						</div>
						<div class="input-field col s6">

							<i class="material-icons prefix fas fa-key mt-2" style="color:#27408B;"></i>
							<input name="senha" id="icon_prefix_senha" require="" type="password" class="validate">
							<label for="icon_prefix_senha" style="font-size:20px;">Senha</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 md-12 lg-12">
					<div class="row">
						<div class="input-field col s12">

							<i class="material-icons prefix fas fa-id-card-alt mt-2" style="color:#27408B;"></i>
							<input name="cnpj" id="icon_prefix_cnpj" type="text" class="validate">
							<label for="icon_prefix_cnpj" style="font-size:20px;">CNPJ</label>
						</div>

					</div>
				</div>
			</div>


			<div class="input-group-prepend mb-3">
				<input type="submit" class="btn mx-auto mb-3 text-white" style="background-color:#27408B;" name="bt">
			</div>


			<div class="display-5 text-center"><a href="form-login.php" style="color:#27408B;text-decoration: none;" class="h5">Já está cadastrado? <b>Faça o seu login</b></a></div>
		</form>
	</div>

	<?php 
		include_once 'footer.php';
	?>




