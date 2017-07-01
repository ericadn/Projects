
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Estrelas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		img{
			width: 50px;
		}
		button{
			display: block;
		}
		div{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php
					$estrelas = $_POST["estrelas"];
					if(is_int(intval($estrelas)) && $estrelas>0){
						for($i=0; $i<$estrelas; $i++){
							echo "<img src='https://cdn.pixabay.com/photo/2013/07/13/10/22/star-157086_960_720.png'>";
						}
						echo "
							<a href='index.html'>
							    <button type='submit' class='btn btn-default' aria-label='Alinhar na esquerda'>
									Voltar
								</button>
							</a>";
					}
					else{
						echo "
						 <div class='container'>	
							<div class='alert alert-danger' role='alert'>
							  	<h3>Preecha os campos corretamente!</h3>
						    </div>
						</div>
						<a href='index.html'>
						    <button type='submit' class='btn btn-default' aria-label='Alinhar na esquerda'>
								Voltar
							</button>
						</a>";
					}
				?>				
			</div>
		</div>
	</div>
</body>
</html>
