<?php 
session_start();
$acao = 'recuperar';
include"../../harmony_privado/sessao-sindico.php";
include"../../harmony_privado/user-controller.php";

?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Painel Síndico</title>
		<link rel="stylesheet" href="visuais.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<!--<script src="https://kit.fontawesome.com/92c939a7c7.js" crossorigin="anonymous"></script>!-->
		<script src="alterarcadastro.js"></script>
	</head>

	<body class="">
			<nav class="navbar navbar-dark bg-dark">
				<div>
					<a class="d-flex" href="#">
					<img src="logo.png.jfif" width="140" height="140" class="align-right">
						
					</a>
				</div>
				<a class="btn btn-secondary" href="logout.php">Sair</a>
			</nav>
        <div class="container mt-3">
			<div class="row">
					<div class="col-md-2 col-lg-2 menu">
						<ul class="list-group">
							<li class="list-group-item list-group-item-action list-group-item-secondary"><a style="text-decoration:none" href="painel_sindico.php?pendentes">Cadastros Pendentes</a></li>
							<li class="list-group-item list-group-item-action list-group-item-secondary"><a style="text-decoration:none" href="painel_sindico_ativos.php?ativos">Cadastros Ativos</a></li>
						</ul>
					</div>	
				<div class="col-md-10 col-lg-10">
					<div class="col " >
						<div class="row pagina">
							<div class="row " >
								<h4 id="txttitulo" class="mb-3">Lista de Cadastros Pendentes</h4>
								<form id="form" action="#" method="POST">
									<div id="divmaster" class="table-responsive-sm table-responsive-md table-responsive-lg">
										<table class="table table-hover pagina">
											<div class="container">
												<thead>
													<tr class="table-secondary">
														<div id="divheader" class="">
															<th scope="col"><div>Nome</div></th>
															<th scope="col"><div>Email</div></th>
															<th scope="col"><div>Telefone</div></th>
															<th scope="col"><div>Apartamento</div></th>
															<th scope="col"><div>Cadastro</div></th>
															<th scope="col"><div></div></th>
															<th scope="col"><div></div></th>
														</div>
													</tr>
												</thead>
												<?php foreach($impressao as $indice => $dados){?>	
													<tbody>
														<div  class="">
															<tr>
																<div id="div_<?=$dados['ID'];?>" class="d-flex d-sm-flex">
																	<td><div><?= $dados['nome'];?></div></td>
																	<td><div><?= $dados['email'];?></div></td>
																	<td><div><?= $dados['telefone']?></div></td>
																	<td><div><?= $dados['apartamento']?></div></td>
																	<td><div><?= $dados['data_cadastro']?></div></td>
																	<td><div><button onclick="aceitar(<?= $dados['ID'];?>)" class="btn btn-outline-success fas fa-check mt-2"></button></div></td>
																	<td><div><button onclick="rejeitar(<?= $dados['ID'];?>)" class="btn btn-outline-danger far fa-times-circle mt-2" ></button></div></td>
																	<input id="inputvazio" type="hidden">
																</div>
															</tr>
														</div>
													</tbody>
												<?}?>
											</div>
										</table>
									</div>
								</form>
							</div> 	
						</div>		
					</div>	
				</div>	
			</div>						
		</div>				
	</body>
</html>