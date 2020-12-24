<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Teste Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<?php 
	if($inserido && $insercao){//Se de fato foi inserido, recarrega a tela
		echo "<script> window.onload = function(){
			window.parent.location.reload(false);
		}</script>";
	}elseif($insercao){//Se houve tentativa e não passou na validação, retorna o problema
		echo '<script>alert("'.$erro.'")</script>';
	}
?>
</head>
<body class="bg-light">
	<div class="container">
		<div class ="py-5 text-center">
			<h2>Formulário de Inserção de Produtos</h2>
			
		</div>
		<form name ="cadProd" id="cadProd" method="post" action = "{{url('produtos')}}">
			@csrf
			<div class="row">
				<div class="col-sm-6">
					<label for="produto" class="form-label">Produto</label>
					<br>
					<input id = "prodDesc" name="prodDesc" type = "text" class="form-control" maxlength="191" placeholder="EX: Maçã" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
				<label for="localizacao" class="col-form-label">Localização</label>
				<br>
				<input id = "prodLoc" name="prodLoc" type = "text" class="form-control text-uppercase" maxlength="3" placeholder = "EX: A2D" required>
				</div>
			</div>
			<hr class="my-4">
			<input type="submit" class="btn btn-primary" value="Gravar">
			
			
			
		</form>
	</div>
	
</body>
</html>
