<!--				 				CRUD - ISUD  - by: Fabrício da Silva Dias
							 ____________________________________________________________
							|| 														    ||
							|| crud = [C]reate, [R]ead, [U]pdate e [D]elete ou Destroy	||
							|| isud = [I]NSERT, [S]ELECT, [U]pdate, [D]elete			||
							||__________________________________________________________||

-->
<!DOCTYPE html>
<?php
	include "database.php";
	$id = $_GET['id'];
?>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf8"><!-- declarar formato de teclado -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="col-md-4 col-md-offset-4" id="conteudo">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Formulario</h3>
				</div>
				<div class="panel-body">
					<form action="update.php" name="registrar" method="get" onsubmit="return validarCadastro();">
						 <div class="form-group">
							 <input type='hidden' name='id' value='<?php echo $_GET['id']; ?>'>
							 <span>Nome:</span>
							 <input class="form-control input-sm" name="nome" type="text" id="nome"> 
        
							<span>Idade:</span>
							<input class="form-control input-sm" name="idade" type="text" id="idade">
               
							<span>Sexo:</span>
							 <select class="form-control input-sm" name="sexo" id="sexo">
								<option selected="selected">M</option>
								<option>F</option>
							</select>

							<input value="Enviar" class="btn btn-success btn-sm" type="submit">
							<a href="registros.php" id="exibirRegistros" class="btn btn-primary btn-sm">Exibir registros</a>
						</div> <!-- Div Form-Group -->
					</form>
				</div>  <!-- Panel-Body -->
			</div> <!-- Panel -->
		</div> <!-- Div Conteúdo -->
	
	<script language="javascript">
		function validarCadastro(){

			if(document.registrar.nome.value.trim()==""){
				alert("Por favor, preencha o campo nome!");
				document.registrar.nome.focus();
				return false;
			}

			if(document.registrar.idade.value.trim()==""){
				alert("Por favor, preencha o campo idade!");
				document.registrar.idade.focus();
				return false;
			}
		}
	</script>
</body></html>