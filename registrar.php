<!--				 				CRUD - ISUD  - by: Fabrício da Silva Dias
							 ____________________________________________________________
							|| 														    ||
							|| crud = [C]reate, [R]ead, [U]pdate e [D]elete ou Destroy	||
							|| isud = [I]NSERT, [S]ELECT, [U]pdate, [D]elete			||
							||__________________________________________________________||

-->
<?php 
	include "database.php";
	$pdo = conexaoPDO();
	$nome = $_GET["nome"];
	$idade = $_GET["idade"];
	$sexo = $_GET["sexo"];

	$stmt = $pdo->prepare(
		"insert into Familia(
			nome,
			idade,
			sexo
		)values(
			:nome,
			:idade,
			:sexo
		);"
	);
	$stmt->bindValue(":nome", $nome);
	$stmt->bindValue(":idade", $idade);
	$stmt->bindValue(":sexo", $sexo);
	$stmt->execute();
	$pdo = null;
	header("Location: registros.php");
?>	
