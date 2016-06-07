<!--				 				CRUD - ISUD  - by: Fabrício da Silva Dias
							 ____________________________________________________________
							|| 														    ||
							|| crud = [C]reate, [R]ead, [U]pdate e [D]elete ou Destroy	||
							|| isud = [I]NSERT, [S]ELECT, [U]pdate, [D]elete			||
							||__________________________________________________________||

-->
<html>
	<?php 
		#Incluindo um enredo(script) externo 'database.php'.
		include "database.php"; 
		$pdo = conexaoPDO();
		$stmt = $pdo->prepare("select * from Familia;");
		$stmt->execute();
		$pdo = null;
	?>
	<head>
		<meta charset="utf8">
	</head>
	<body>
		<!-- Estabelecendo configuração de localização (usando bootstrap) e definindo id da div. -->
		<div class="col-md-6 col-md-offset-3" id="tabelaLocal">	
			
			<!-- criando a tabela com configurações do bootstrap, nomeando e adicionando id -->
			<table class="table table-bordered table-striped table-condensed" id="registro" name="registrar">
				<!-- Criando a cabeça da tabela e adicionando a identificação (id) -->
				<tr class="text-center" id="tr1"> 
					<td>nome </td>
					<td>idade</td>
					<td>sexo</td>
					<td></td>
					<td></td>
				</tr>
				<?php	
					#Criando o laço de repetição e Atribuindo os valores da variável $stmt na variável $result.
					while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){  
				?>
					<!-- Criando o corpo da tabela dentro do laço de repetição (while) -->
					<tr class="text-center">
						<!-- 	Exibindo os registros específicos do db nas colunas da tabela. 
							 (Obs: Os valores já foram declarado e atribuido na variável $result)
						-->
						<td><?php print_r ($result['nome']); ?></td>
						<td><?php print_r ($result['idade']); ?></td>				
						<td><?php print_r ($result['sexo']); ?></td>
						<td><a href="reform.php?id=<?php echo $result['id'];?>" class="btn btn-success btn-sm"> Editar</a></td>
						<td><a href="deletar.php?id=<?php echo $result['id'];?>" class="btn btn-danger btn-sm"> Excluir</a></td>
					</tr>
				<?php
					}; #Fechando laço de repetição.
				?>
			</table>
			<a href="index.php" class="btn btn-Primary btn-sm col-md-offset-5"> Voltar </a>
			<a href="deletar.php?id=" class="btn btn-danger btn-sm"> Excluir tudo</a>
		</div>
	</body>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</html>		