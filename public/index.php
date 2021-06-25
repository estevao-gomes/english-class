<?php 
	require 'auth.php';
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
	<link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.ico" />
	<title>Prof. Fernanda</title>
</head>
<body>
	<div class="container-fluid"> <!-- Container Principal -->
		<div class="row"> <!-- Linha de conteúdo da barra de navegação -->
			<nav class="navbar navbar-expand-md navbar-primary">
							<a class="navbar-brand" href="#"><img class="img-fluid p-2" src="../assets/Logo.png">Professora Fernanda Santos</a> <!-- Logo -->
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
								<i class="bg-light fas fa-bars"></i>
							</button>
							<div class="collapse navbar-collapse justify-content-end" id="navBar"><!-- Barra de navegação -->
								<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
									<li class="nav-item mx-2">
										<a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home</a>
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
			<div class="col-md-2"><!--  Área de login ou inscrição do aluno -->
				<?php if(!$auth->isLoggedIn()){ ?>
				<div class="row">
				<h4 class="text-light p-2 ms-4">Área do Aluno</h4>
					<form method="post" action="signin.php">
						<div class="row">
							<div class="col-md-10 offset-md-1">
								<input type="email" name="email" id="email" aria-describedby="emailHelp" class="form-control" placeholder="Insira seu email">
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 offset-md-1">
							<input type="password" name="senha" class=" my-2 form-control" id="senha" placeholder="Senha">
							</div>
						</div>
						<div class="row">
							<div class="col-4 offset-md-7">
								<button class="form-control button btn-primary" type="submit"><i class="fas fa-arrow-right text-light"></i></button>
							</div>
						</div>
					</form>
					<!-- Área de check para erros de login -->
					<?php if(isset($_GET['login']) && $_GET['login']=='authError'){?><!-- Erro de autenticação (acesso a painel de controle não autorizado) -->
						<div class="row">
							<div class="alert alert-danger p-2 mx-4">
								<span class="text-danger"><i class="fas fa-times"></i> 1Acesso não autorizado</span>
							</div>
						</div> 
					<?php }else if(isset($_GET['login']) && $_GET['login']=='emailError'){ ?> Email <!-- errado -->
						<div class="row">
							<div class="alert alert-danger p-2 mx-4">
								<span class="text-danger"><i class="fas fa-times"></i> Email incorreto</span>
							</div>
						</div>
					<?php }else if(isset($_GET['login']) && $_GET['login']=='passwordError'){ ?> <!-- Senha errada -->
						<div class="row">
							<div class="alert alert-danger p-2 mx-4">
								<span class="text-danger"><i class="fas fa-times"></i> Senha incorreta</span>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="row">
				<h4 class="text-light p-2 ms-4">Área de Registro</h4>
					<form method="post" action="signup.php">
						<div class="row">
							<div class="col-md-10 offset-md-1">
							<input type="text" name="username" class=" my-2 form-control" id="user" placeholder="username">
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 offset-md-1">
								<input type="email" name="email" id="email" aria-describedby="emailHelp" class="form-control" placeholder="Insira seu email">
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 offset-md-1">
							<input type="password" name="password" class=" my-2 form-control" id="senha" placeholder="Senha">
							</div>
						</div>
						<div class="row">
							<div class="col-4 offset-md-7">
								<button class="form-control button btn-primary" type="submit"><i class="fas fa-arrow-right text-light"></i></button>
							</div>
						</div>
					</form>
					<?php if(isset($_GET['signup']) && $_GET['signup']=='success'){?> <!-- Check para redirecionamento de sign up -->
						<div class="row">
							<div class="alert alert-success p-2 mx-4">
								<span class="text-success"><i class="fas fa-times"></i> Registro realizado com sucesso. Favor faça login.</span>
							</div>
						</div>
					<?php }else if(isset($_GET['signup']) && $_GET['signup']=='emailError'){ ?> <!-- Check para erro de email -->
					 	<div class="row">
							<div class="alert alert-danger p-2 mx-4">
								<span class="text-danger"><i class="fas fa-times"></i> Erro no registro. Email inválido. Tente novamente.</span>
							</div>
						</div>
					<?php }else if(isset($_GET['signup']) && $_GET['signup']=='userError'){ ?> <!-- Check para erro de usuário duplicado -->
					 	<div class="row">
							<div class="alert alert-danger p-2 mx-4">
								<span class="text-danger"><i class="fas fa-times"></i> Erro no registro. Usuário já existe. Tente novamente.</span>
							</div>
						</div>
					<?php }else if(isset($_GET['signup']) && $_GET['signup']=='passwordError'){ ?> <!-- Check para erro de senha inválida -->
					 	<div class="row">
							<div class="alert alert-danger p-2 mx-4">
								<span class="text-danger"><i class="fas fa-times"></i> Erro no registro. Senha inválida. <br>
								Sua senha deve ter ao menos 10 caracteres. <br>
								Tente novamente.</span>
							</div>
						</div>
					<?php } ?>
				</div>
				<?php } 	else{ ?>
				<div class="row">
				<h4 class="text-light p-2 ms-4">Área do Aluno</h4>
					<h5 class="text-light p-2 ms-4"><?=$username = $auth->getUsername();?></h5>
					<?php if($auth->hasRole(\Delight\Auth\Role::ADMIN)){?>
					<form action="teacher.php">
						<button type="submit" class="form-control button btn-primary">Área do professor</button>
					<?php }else{?>
					<form action="student.php">
						<button type="submit" class="form-control button btn-primary">Área do aluno</button>
					<?php } ?>
					</form>
					<form action="logout.php">
						<button type="submit" class="form-control button btn-primary">Logout</button>
					</form>
					<?php if(isset($_GET['login']) && $_GET['login']=='authError'){?>
						<div class="row">
							<div class="p-2 ms-4 alert alert-danger">
								<span class="text-danger"><i class="fas fa-times"></i> Acesso não autorizado</span>
							</div>
						</div>
					<?php }?>
				</div>
				<?php } ?>
			</div>
			<div class="col-md-10"> <!-- Área do carrossel, instagram e imagens -->
				<div class="row"> <!-- Carrossel -->
					<div id="carousel" class="carousel slide" data-ride="carousel" data-bs-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="img-fluid d-block w-100" src="../assets/speed.jpg" alt="First slide">
					      <div class="carousel-caption d-md-block">
					        <h4>No seu ritmo</h4>
					        <p>Nossa aula será no seu ritmo de aprendizado!</p>
					      </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 img-fluid" src="../assets/personalizado.jpg" alt="Second slide">
					      <div class="carousel-caption d-md-block">
						        <h4>Personalizado</h4>
						        <p>Classes personalizadas a suas necessidades!</p>
					      </div>
					    </div>
					    <div class="carousel-item">
					      <img class="img-fluid d-block w-100" src="../assets/flexivel.jpeg" alt="Third slide">
					      <div class="carousel-caption d-md-block justify-items-end">
					        <h4>Flexibilidade</h4>
					        <p>Horários flexíveis para atender a seu tempo!</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="row"> <!-- Post do instagram e imagem -->
					<div class="p-2 col-md-6"><img class="img-fluid rounded" src="../assets/post_instagram.jpg"></div> <!-- No lugar da imagem, inserir post mais recente do instagram - A ser implementado no backend -->
					<div class=" p-2 col-md-6">
						<a href=""><img class="rounded mx-auto d-block img-fluid aula" src="../assets/matriculas_abertas.jpg"></a>
					</div>
				</div>
			</div>	
		</div>
		<div class="row d-flex align-items-center foot"> <!-- rodapé -->
			<div class="col d-flex align-items-center"> <!-- Logo e nome  -->
				<img src="../assets/Logo.png">
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