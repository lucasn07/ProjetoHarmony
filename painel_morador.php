<?php
session_start();
$acao = "recuperar_reservas";
include_once "../../harmony_privado/sessao-morador.php";
include_once "../../harmony_privado/user-controller.php";
include_once "calendario.php";
include_once "teste.php";

$monthTime = getMonthTime();
$startDate = strtotime('last sunday', $monthTime);
$idmorador = ($_SESSION['morador']);
//echo $idmorador;
//echo ' / ';
/*
function geraArray($impressao){
	$novoArray = array();
	for($x = 0; $x < count($impressao); $x++){
		
		array_push($novoArray, $impressao[$x]['data_reserva']);
	}
	return $novoArray;
}
*/
$newArray = array_column($impressao,'data_reserva');





?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel do Morador (Reservas)</title>
	<link rel="stylesheet" href="visuais.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<script src="https://kit.fontawesome.com/92c939a7c7.js"></script>


</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
		<div>
			<a class="" href="#">
				<img src="logo.png.jfif" width="140" height="140" class="ml-3">

			</a>
		</div>
		<a class="alink btn btn-secondary" href="logout.php">Sair</a>
	</nav>
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item list-group-item-action list-group-item-secondary"><a style="text-decoration:none" href="painel_morador.php">Painel Morador Reservas</a></li>
					<li class="list-group-item list-group-item-action list-group-item-secondary"><a style="text-decoration:none" href="painel_morador.php">Painel Morador 2</a></li>
				</ul>
			</div>

			<div class="col-md-8 container">

				<div class="col pagina">
					<nav class="navbar navbar-brand">
						<a class="btn btn-secondary" href="?month=<?= prevMonth($monthTime) ?>" style="text-decoration:none"><i class="fa-solid fa-arrow-left"></i></a>
						<? echo '<h1 class="">' . date('m/Y', $monthTime) . '</h1>' ?>
						<a class="btn btn-secondary" href="?month=<?= nextMonth($monthTime) ?>" style="text-decoration:none"><i class="fa-solid fa-arrow-right"></i></a>
					</nav>


					<?php
					echo '<div id=divmaster>';
					echo '<table class="table table-light pagina ">
										<thead class="thead-dark">
											<tr>
												<th scope="col">DOM</th>
												<th scope="col">SEG</th>
												<th scope="col">TER</th>
												<th scope="col">QUA</th>
												<th scope="col">QUI</th>
												<th scope="col">SEX</th>
												<th scope="col">SAB</th>
											</tr>
										</thead>';
					?>
					<?php
					echo '<tbody>';
					for ($linhas = 0; $linhas < 6; $linhas++) {
						echo '<tr>';

						for ($colunas = 0; $colunas < 7; $colunas++) {
							$iddate = date('Y-m-d', date($startDate));
							$iddias = date('j', date($startDate));

							

							if (date('1-m-Y', $startDate) !== date('1-m-Y',$monthTime)) {
								echo "<td class='other-month'>";
								//echo "<button id='bt{$iddias}'class='btn disabled other-month'>";
								echo $iddias;
							} else if(in_array($iddate, $newArray)) {
								echo "<td id='reservado{$iddias}' name='{$iddate}'>";
								echo "<button id='reservadoBT{$iddias}' class='btn btn-danger disabled'>";
								echo $iddias;
								
							} else {
								echo "<td id='{$iddias}' name='{$iddate}'>";
								echo "<button id='bt{$iddias}' type='submit' onclick='reservar($iddate, $iddias, $idmorador)' class='btn btn-outline-success'>";
								echo "<input id='data{$iddias}' name='iddate' type=hidden value='{$iddate}'>";
								echo "<input id='dia{$iddias}' name='iddias' type=hidden value='{$iddias}'>";
								echo "<input id='morador{$idmorador}' name='idmorador' type=hidden value='{$idmorador}'>";
								echo $iddias;
							}


							
							$startDate = strtotime("1 day", $startDate);
							//$iddate = date('j', date($startDate));
							echo '</td>';
						}
						echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>';
					echo '</div>';
					
					?>
				
				
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>

	<script src="reservas.js"></script>
</body>

</html>