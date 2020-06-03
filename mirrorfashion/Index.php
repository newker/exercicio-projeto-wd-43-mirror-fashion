<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Mirror Fashion</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width"/>
		<link rel="stylesheet" href="css/Reset.css"/>
		<link rel="stylesheet" href="css/Estilos.css"/>
		<link rel="stylesheet" href="css/Mobile.css" media="(max-width:939px)"/>
	</head>
	<body>
		<!--INICIO DO CABEÇALHO-->
		<?php include("Cabecalho.php");?>
		<!--FIM DO CABEÇALHO-->
		
		<!--CONTEÚDO DE DESTAQUES-->
		<div class="container destaque">
			<!--área de busca-->
			<section class="busca">
				<h2>Busca</h2>
				
				<form>
					<input type="search"/>
					<input type="image" src="img/busca.png"/>
				</form>
			</section><!--Fim da busca-->
			<!--Menu de departamentos-->
			<section class="menu-departamentos">
				<h2>Departamentos</h2>
				
				<nav>
					<ul>
						<li>
							<a href="#">Blusas e Camisas</a>
							<ul>
								<li><a href="#">Manga curta</a></li>
								<li><a href="#">Manga comprida</a></li>
								<li><a href="#">Camisa social</a></li>
								<li><a href="#">Camisa casual</a></li>
							</ul>
						</li>
						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessórios</a></li>
					</ul>
				</nav>
			</section><!--Fim de departamentos-->
			
			<img src="img/destaque-home.png" alt="Promoção: Big City Night"/>
		</div><!--Fim da div container destaque-->
		
		<div class="container paineis">
			<!--Os paineis de novidades e mais vendidos entrarão aqui.-->
			<section class="painel novidades">
				<h2>Novidades</h2>
				<ol>
					<li><!--Primeiro Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura1.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Segundo Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura2.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Terceiro Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura3.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Quarto Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura4.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Quinto Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura5.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Sexto Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura6.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
			</section>
				
			<section class="painel mais-vendidos">
				<h2>Mais Vendidos</h2>
				
				<ol>
					<li><!--Primeiro Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura7.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Segundo Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura8.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Terceiro Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura9.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Quarto Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura10.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Quinto Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura11.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><!--Sexto Produto-->
						<a href="Produto.php">
							<figure>
								<img src="img/produtos/miniatura12.png"/>
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
			</section>
		</div>
		<!--INICIO DO RODAPE-->		
		<?php include("Rodape.php");?>	
		<!--FIM DO RODAPE-->	
	</body>
</html>