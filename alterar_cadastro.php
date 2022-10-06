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
		<title>Painel do Síndico</title>
		<link rel="stylesheet" href="estilo.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		
	</head>

	<body class="">
			<nav class="navbar navbar-dark bg-dark">
				<div>
					
						<img src="logo.png.jfif" width="120" height="120" class="d-inline-block align-top" alt="">
						<span class="navbar-text" style="font-size:1.5em">Painel do síndico - ATIVOS</span>
					
				</div>
				<h2><a href="logout.php">Sair</a></h2>
			</nav> 
        
		
		<div class="container mt-3 d-flex">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item list-group-item-action list-group-item-secondary"><a href="painel_sindico.php?pendentes">Cadastros Pendentes</a></li>
						<li class="list-group-item list-group-item-action list-group-item-secondary"><a href="painel_sindico_ativos.php?ativos">Cadastros Ativos</a></li>
					</ul>
				</div>	
				<div class="col-md-1">
					<div class="navbar navbar-brand pagina">
						<div class="row">
						<div class="col">
								<h4>Cadastros Ativos</h4>
								
							<?php foreach($impressao as $indice => $dados){?>  
								<div class="row mb-3 d-flex align-items-center">
									<table class="table table-hover">
										<thead>
											<tr class="table-secondary">
												<th scope="col">Nome</th>
												<th scope="col">Email</th>
												<th scope="col">Telefone</th>
												<th scope="col">Apartamento</th>
												<th scope="col">Alterar Cadastro</th>
												<th scope="col">Excluir Cadastro</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											<form action="user-controller.php?acao=alterar" method="post">
                                                
												<td><input name="nome" type="text"  value="<?= $dados->nome;?>" required>
												
												</td>
												<td><input name="email" type="text" value="<?= $dados->email;?>" required> 
											
												</td>
												<td><input name="telefone" type="text" value="<?= $dados->telefone;?>" required> 
											
												</td>
												<td><input name="apartamento" type="text" value="<?= $dados->apartamento;?>" required>
											
												</td>
												<input type="hidden" name="id" value="<? $dados->ID;?>">
												<td> <button type="submit" class="ml-3 btn btn-outline-info far fa-edit"></button></td>
                                            </form>
												<td> <button type="submit" class="ml-3 btn btn-outline-danger far fa-trash-alt"></button></td>
											
											</tr>
										</tbody>
									</table> 	
								</div>		
							<?}?>
						</div>	
						</div>	
					</div>						
				</div>				
			</div>						
		</div>
	</body>						
</html>						
				
			
		
	
