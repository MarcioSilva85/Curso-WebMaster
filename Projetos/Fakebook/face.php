<!DOCTYPE html>
<html lang="pt-br">

<head>
	<input type="url" name="" value="" placeholder=""><meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../Fakebook/css/style.css">
	<title>Meu Fakebook </title>
	<meta name="viewport" content="whidt=device-whidt,initial-scale=1.0">
	<!-- Aplicar meta tags-->
</head>

	<header>
		<div class="center">
			<div class="logo">
				<h2><b>fakebook</b></h2>
			</div><!--logo-->
			<form method="post" class="form-login">
				<div class="form-element">
					<p>Email ou telefone</p>
					<input type="email" required>
				</div><!--form-element-->
				<div class="form-element">
					<p>Senha</p>
					<input type="password" required>
				</div><!--form-element-->
				<div class="form-element">
					<input type="submit" name="acao" value="Entrar">
				</div><!--form-element-->
					<a href="https://www.facebook.com/login/identify/?ctx=recover&ars=royal_blue_bar">
					<h2>Esqueceu a conta?</h2></a>
			</form><!--form-login-->
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<div>
				<p>O Fakebook ajuda você a se conectar e compartilhar seus dados confidenciais com pessoas que você não faz nem idéia de quem são!</p>
				</div>
				<div class="clear"></div>
				<img src="../Fakebook/imagem/face.png">
			</div><!--img-pessoas-->
			<div class="clear"></div>
			<div class="abrir-conta">
				<h2>Abra uma conta</h2>
				<h3>É rápido e fácil.</h3>

				<form class="criar-conta">
					<div class="w50">
						<input type="text" placeholder="Nome" required>
					</div><!--w50-->
					
					<div class="w50">
						<input type="text" placeholder="Sobrenome" required>
					</div><!--w50-->
					
					<div class="w100">
						<input type="email" placeholder="Celular ou email" required>
					</div><!--w100-->

					<div class="w100">
						<input type="password" placeholder="Nova senha" required>
					</div><!--w100-->

					<div class="w100">
						<h3>Data de nascimento</h3>
						<select name="dia" class="nascimento">
							<option value="0">Dia</option>
							<?php
								for($i = 1; $i <= 31; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
							<option value="1" selected="1">4</option>
						</select>
						<select name="mes" class="nascimento">
							<option value="0">Mês</option>
							<option value="1">Jan</option>
							<option value="2">Fev</option>
							<option value="3" selected="1">Mar</option>
							<option value="4">Abr</option>
							<option value="5">Maio</option>
							<option value="6">Jun</option>
							<option value="7">Jul</option>
							<option value="8">Ago</option>
							<option value="9">Set</option>
							<option value="10">Out</option>
							<option value="11">Nov</option>
							<option value="12">Dez</option>
						</select>
						<select name="ano" class="nascimento">
							<option value="0">Ano</option>
							<?php
								for($i = 1950; $i <= 2020; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
							<option value="1" selected="1">1985</option>
						</select>
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<div class="input-radio">
							<input type="radio" value="Masculino" name="Genero">
							<h3>Masculino</h3>
						</div><!--radio-->
						<div class="input-radio">
							<input type="radio" value="Feminino" name="Genero">
							<h3>Feminino</h3>
						</div><!--radio-->
						<div class="input-radio">
							<input type="radio" value="Personalizado" name="Genero">
							<h3>Personalizado</h3>						
						</div><!--radio-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<input type="submit" name="acao" value="Cadastre-se">
					</div><!--w100-->

					<div class="clear"></div>
				</form><!--criar-conta-->
				
			</div><!--abrir-conta-->

			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

<body>

</body>
</html>