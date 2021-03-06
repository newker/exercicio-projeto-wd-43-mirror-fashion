<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Mirror Fashion</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width"/>
		<link rel="stylesheet" href="css/Reset.css"/>
		<link rel="stylesheet" href="css/Estilos.css"/>
		<link rel="stylesheet" href="css/Mobile.css" media="(max-width:939px)"/>
		<link rel="stylesheet" href="css/Produto.css"/>		
	</head>
	<body>
		
		<?php include("Cabecalho.php");?>
		
		<div class="container">
			<div class="produto">
				<h1>Fuzzy Cardigan</h1>
				<p>por apenas R$ 129,00</p>
				
				<form action="Checkout.php" method="POST">
					<input type="hidden" name="nome" value="Fuzzy Cardigan">
					<input type="hidden" name="preco" value="129,00">
					
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>
						
						<input type="radio" name="cor" value="verde" id="verde" checked/>
						<label for="verde">
							<img src="img/produtos/foto2-verde.png" alt="verde"/>
						</label>
						
						<input type="radio" name="cor" value="rosa" id="rosa"/>
						<label for="rosa">
							<img src="img/produtos/foto2-rosa.png" alt="rosa"/>
						</label>
						
						<input type="radio" name="cor" value="azul" id="azul"/>
						<label for="azul">
							<img src="img/produtos/foto2-azul.png" alt="azul"/>
						</label>
					</fieldset>
					
					<fieldset class="tamanho">
						<legend>Escolha o tamanho:</legend>
						
						<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho"/>
						
						<output for="tamanho" name="valortamanho" id="valortamanho" class="tamanhos">42</output>
					</fieldset>
					
					<input type="submit" class="comprar" value="Comprar"/>
				</form>
			</div>
			<!--SEÇÃO DETALHE-->
			<div class="detalhes">
				<h2>Detalhes do produto</h2>
				<p>Esse é o melhor casaco de Cardigã que você já viu. Excelente
				material italiano com estampa desenhada pelos artesãos da
				comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
				mesmo pela nossa entrega a jato.
				</p>
				
				<table>
					<thead>
						<tr>
							<th>Característica</th>
						<th>Detalhe</th>
					</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
	
		<?php include("Rodape.php");?>
		
		<script>
			var inputTamanho = document.querySelector('[name=tamanho]');
			var outputTamanho = document.querySelector('[name=valortamanho]');
			function mostraTamanho(){
				outputTamanho.value = inputTamanho.value;
			}
			inputTamanho.oninput = mostraTamanho;
		</script>
		
	</body>
</html>