<html>
<head>
<title>
Cadastro
</title>
<style>
h1{
text-align:center;
}
</style>
</head>
<body>
<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$sql = "INSERT INTO usuario (nome, email) VALUES ('$nome', '$email')";

	$link = mysqli_connect('localhost', 'id6412956_adriana', '88933476', 'id6412956_cadastro')or die('<h1>Erro ao conectar ao banco de dados!</h1>');
	 
	$aux = mysqli_query($link, "SELECT * FROM usuario WHERE nome LIKE '$nome' and email LIKE '$email'")or die('<h1>BUAH</h1>');
	$total = mysqli_num_rows($aux);	

	if(($total!=0)or($nome==null)or($email==null)) {
	    echo "<h1>Erro!</h1>";
	}else{
		mysqli_query($link,$sql) or die("<h1>Erro ao tentar cadastrar registro</h1>");
		mysqli_close($link);
	
		echo "<h1>Cadastro efetudado com sucesso!</h1>";
	}
?>
<script>setTimeout(function(){location.href = "index.html"},2000);</script>
</body>
</html>
