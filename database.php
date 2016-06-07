<!--				 				CRUD - ISUD  - by: Fabrício da Silva Dias
							 ____________________________________________________________
							|| 														    ||
							|| crud = [C]reate, [R]ead, [U]pdate e [D]elete ou Destroy	||
							|| isud = [I]NSERT, [S]ELECT, [U]pdate, [D]elete			||
							||__________________________________________________________||

-->
<?php
	function conexaoPDO(){	
		#Iniciando conexão com banco de dados

		$pdo = new PDO ('mysql:host=127.0.0.1;dbname=Familia','root', '');
		$pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		return $pdo;
	}
?>