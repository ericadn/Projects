<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php	
	/* Questão 1 */
	$anonasc = $_POST['ano'];
	$ano = date("Y");
	$re = $ano - $anonasc;
	if($anonasc>1900 && $anonasc<2017 && is_int(intval($anonasc))){
		echo "  <div class='container'>
					<div class='alert alert-success' role='alert'>
				    	<h3>Você tem ". $re ." Anos!</h3>
				    </div>
			    </div>
			    <a href='index.html'>
				    <button type='submit' class='btn btn-default' aria-label='Alinhar na esquerda'>
						Voltar
					</button>
				</a>";
				
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