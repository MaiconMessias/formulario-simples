<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
  <meta charset=”UTF-8”>
  <title></title>
  <script type="text/javascript">
	function validar(){
		var nome = formPrincipal.nome.value;
		if (nome == ""){
			alert("Preencha o campo nome");
			formPrincipal.nome.focus();
			return false;	
		}		
	}
  </script>
</head>
<body>
	<form name="formPrincipal" action="formdestino.php" method="POST">
		<label for="id">Id:</label>
		<input name="id" id="id" type="text" /> <br/><br/>
		<label for="nome">Nome:</label>
		<input name="nome" id="nome" type="text" /> <br/><br/>
		<input type="submit" onclick="return validar()">
	</form>
</body>
</html>