<!--				 				CRUD - ISUD  - by: Fabrício da Silva Dias
							 ____________________________________________________________
							|| 														    ||
							|| crud = [C]reate, [R]ead, [U]pdate e [D]elete ou Destroy	||
							|| isud = [I]NSERT, [S]ELECT, [U]pdate, [D]elete			||
							||__________________________________________________________||

-->
<?php include "database.php"; 
		$pdo = conexaoPDO();
		$id = $_GET['id'];

		if ($id){
		$stmt = $pdo->prepare(
			"delete from Familia where id =:id"					 
		);

		$stmt->bindValue(":id", $id);
		$stmt->execute();
		header("Location: registros.php");	
		$pdo = null;
		
	}else{
		$stmt = $pdo->prepare(
			"delete from Familia"					 
		);
		$stmt->execute();
		header("Location: registros.php");	
		$pdo = null;
	
	};
?>


