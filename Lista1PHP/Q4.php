<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	if($usuario=="maria" && $senha=="12345"){
		echo "  <div class='container'>
					<div class='alert alert-success' role='alert'>
				    	<h3>Autenticação realizada com sucesso</h3>
				    </div>
			    </div>
					<a href='index.html'>
					    <button type='submit' class='btn btn-default' aria-label='Alinhar na esquerda'>
							Voltar
						</button>
					</a>";		
	}else{
		if(isset($usuario) && isset($senha)){
			echo "  <div class='container'>
					    <div class='alert alert-warning' role='alert'>
					    	<h3>Você não tem permissão para visualizar essa página</h3>
						</div>
				    </div>
					<a href='index.html'>
					    <button type='submit' class='btn btn-default' aria-label='Alinhar na esquerda'>
							Voltar
						</button>
					</a>";
		}else{
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
	}
?>