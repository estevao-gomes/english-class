<?php 
	require 'auth.php';
	if ($auth->isLoggedIn()){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico" />
	<title>Prof. Fernanda</title>
</head>
<body>
	<div class="container-fluid"> <!-- Container Principal -->
		<div class="row"> <!-- Linha de conteúdo da barra de navegação -->
			<nav class="navbar navbar-expand-md navbar-primary">
							<a class="navbar-brand" href="#"><img class="img-fluid p-2" src="assets/Logo.png">Professora Fernanda Santos</a> <!-- Logo -->
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
								<i class="bg-light fas fa-bars"></i>
							</button>
							<div class="collapse navbar-collapse justify-content-end" id="navBar"><!-- Barra de navegação -->
								<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
									<li class="nav-item mx-2">
										<a class="nav-link" href="index.html"><i class="fas fa-home"></i>Home</a>
									</li>
									<li class="nav-item mx-2">
										<a class="nav-link" href="curso.html"><i class="fas fa-file-alt"></i>Sobre o curso</a>
									</li>
									<li class="nav-item mx-2">
										<a class="nav-link" href="sobre.html"><i class="far fa-address-card"></i>Sobre Fernanda</a>
									</li>
									<li class="nav-item mx-2">
										<a class="nav-link" href="contato.html"><i class="fas fa-at"></i>Contato</a>
									</li>
								</ul>
							</div>
			</nav>
		</div>
		<div class="row principal"><!-- Área principal contendo carrossel, login do aluno, imagens e posts do instagram -->
			<div class="col-md-2"><!--  Área de login do aluno -->
				<h4 class="text-light p-2 ms-4">Área do Aluno</h4>
					<h5 class="text-light p-2 ms-4"><?=$username = $auth->getUsername();?></h5>
					<form action="logout.php">
						<button type="submit" class="form-control button btn-primary">Logout</button>
					</form>
			</div>
			<div class="col-md-10 professor"> <!-- Área do professor -->
				<div class="row">
					<div class="col-6">Área do Calendário</div>
					<div class="col-6">
						<h5 class="pt-2">Agende sua próxima aula:</h5>
						<form method="post" action="">
							<div class="row">
								<div class="col">
									<label class="form-label" for="data_aluno">Dia:</label>
									<input class="form-control" type="date" name="data_aluno" id="data_aluno">
								</div>
								<div class="col">
									<label class="form-label" for="horario">Horario:</label>
									<select class="form-select" name="horario" aria-label="selecao_horario">
									  <option selected>Selecione</option>
									  <option value="1">Horário 1</option>
									  <option value="2">Horário 2</option>
									</select>
								</div>
								<div class="col d-flex align-items-end">
									<button type="submit" class="form-control btn btn-primary">Enviar</button>
								</div>
							</div>
						</form>
						<h5 class="mt-5">Reagende uma aula:</h5>
						<form method="post" action="">
							<div class="row">
								<div class="col">
									<label class="form-label" for="horario">Horario:</label>
									<select class="form-select" name="horario" aria-label="selecao_horario">
									  <option selected>Selecione</option>
									  <option value="1">Dia 1 Horário 1</option>
									  <option value="2">Dia 2 Horário 2</option>
									</select>
								</div>
								<div class="col">
									<label class="form-label" for="data_aluno">Novo dia:</label>
									<input class="form-control" type="date" name="nova_data_aluno" id="data_aluno">
								</div>
								<div class="col">
									<label class="form-label" for="horario">Novo horario:</label>
									<select class="form-select" name="novo_horario" aria-label="selecao_horario">
									  <option selected>Selecione</option>
									  <option value="1">Horário 1</option>
									  <option value="2">Horário 2</option>
									</select>
								</div>
								<div class="col d-flex align-items-end">
									<button type="submit" class="form-control btn btn-primary">Enviar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<h5 class="mt-2">Este é o exercício para sua próxima aula:</h5>
					<h5><a href="">Faça o download aqui!</a></h5>
				</div>
				<div class="row">
					<h5 class="mt-2">Dúvidas?</h5>
					<form method="post" action="">
						<textarea name="duvidas" class="form-control" rows="4" aria-label="duvidas"></textarea>
						<button type="submit" class="btn btn-primary mt-2 mb-2">Enviar</button>
					</form>
				</div>
			</div>	
		</div>
		<div class="row d-flex align-items-center foot"> <!-- rodapé -->
			<div class="col d-flex align-items-center"> <!-- Logo e nome  -->
				<img src="assets/Logo.png">
				<h5>Professora Fernanda Santos</h5>
			</div>
			<div class="col d-flex justify-content-end"> <!-- Instagram e facebook -->
				<ul class="p-2 mb-2 mb-lg-0 me-5 list-inline">
					<li class="list-inline-item">
						<a href=""><i class="fab fa-instagram fa-2x text-light"></i></a>
					</li>
					<li class="list-inline-item">
						<a href=""><i class="fab fa-facebook-square fa-2x text-light"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php }else{
	header('Location: index.php?login=error');
}