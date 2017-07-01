<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shakespeare</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		img{
			width: 400px;
		}
		div div div{
			text-align: center;
		}
		body{
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="https://www.biography.com/.image/t_share/MTE1ODA0OTcxNzgzMzkwNzMz/william-shakespeare-194895-1-402.jpg" alt="">
				<?php
					$idioma = $_GET["idioma"];
					if ($idioma == "pt"){
						echo "<h3>Ser ou não ser? Eis a questão!</h3>";
					}
					elseif ($idioma == "en") {
						echo "<h3>To be or not to be? That is the question</h3>";
					}
				?>
			</div>
			<div class="col-md-12">
				<a href='idioma.php'>
				    <button type='submit' class='btn btn-default' aria-label='Alinhar na esquerda'>
						Voltar
					</button>
				</a>
			</div>
		</div>

	</div>
</body>
</html>
