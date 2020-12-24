<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Teste Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body class="bg-light">
	<div class="container">
		<div class ="py-5 text-center">
			<h2>Produtos Cadastrados</h2>
		</div>
		<table class = "table">
			<thead class = "thead-dark">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Produto</th>
					<th scope="col">Localização</th>
				</tr>
			</thead>
			<tbody>
					@foreach($prods as $prod)
					<tr>
					<td>{{$prod->id}}</td>
					<td>{{$prod->descricao}}</td>
					<td>{{$prod->localizacao}}</td>
					</tr>
					
					@endforeach
			</tbody>
		</table>
	</div>
	
</body>
</html>
