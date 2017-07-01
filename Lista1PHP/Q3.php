<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php
	$peso = $_POST["peso"];
	$altura = $_POST["altura"];
	$re = $peso / ($altura * $altura);
	if($peso>0 && $altura>0 && is_int(intval($peso)) && is_int(intval($altura))){
		if($re>25){
			echo "  <div class='container'>	
						<div class='alert alert-warning' role='alert'>
						  <h3>Você está acima do peso!</h3>
					    </div>
					</div>
					<a href='index.html'>
					    <button type='submit' class='btn btn-default' aria-label='Alinhar na esquerda'>
							Voltar
						</button>
					</a>";
		}else{
			echo "  <div class='container'>
					<div class='alert alert-success' role='alert'>
				    	<h3>Você está saudável</h3>
				    </div>
			    </div>
				<a href='index.html'>
				    <button type='submit' class='btn btn-default' aria-label='Alinhar na esquerda'>
						Voltar
					</button>
				</a>";		
			}
	}
	else{
		echo "  <div class='container'>	
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