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
	
	$id = $_GET["id"];
	$nome = $_GET["nome"];
	$idade = $_GET["idade"];
	$sexo = $_GET["sexo"];

	$stmt = $pdo->prepare( 
		'update Familia '.    
		'set nome = :nome, '.
		'idade = :idade, '.
		'sexo = :sexo ' .
		'where id = :id');
	$stmt->bindValue(":id", $id);
	$stmt->bindValue(":nome", $nome);
	$stmt->bindValue(":idade", $idade);
	$stmt->bindValue(":sexo", $sexo);
	$stmt->execute();
	$pdo = null;
	header("Location: registros.php");
?>
