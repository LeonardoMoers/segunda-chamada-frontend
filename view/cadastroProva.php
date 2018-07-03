<!DOCTYPE html>
<html>
<head>
	<title>Cadastro - Prova</title>
	<?php include '../template/menu.html' ?>
	<?php include '../template/header.html'; ?>
</head>
<body>

	<div class="alert alert-danger mt-3" role="alert">
        Falha ao realizar o cadastro.
    </div>
    <div class="alert alert-success" role="alert">
        Cadastro realizado com sucesso.
    </div>

    <section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
    	<header class="row text-center mt-3 mb-3">
    		<div class="col">
    			<h2 class="text-dark"">Cadastrar Prova</h2>
    		</div>
    	</header>

    	<article class="row justify-content-center ml-0 mr-0">
    		<div class="col-sm-12 col-md-10 col-lg-8">
    			<form>
    				<div class="form-group">
    					<label for="inputNome">Insira o nome da Prova</label>
    					<input type="text" name="Nome" placeholder="Nome" class="form-control" required="required" required pattern="[^0-9]+$" maxlength="120" minlength="3" title="Somente caracteres">
    				</div>
    				<div class="form-group">
    					<label for="inputData">Selecione a materia:</label>
    					<select class="form-control" required="required">
    						<option>...</option>
    					</select>
    				</div>
    				<div class="text-center">
    					<button type="submit" name="inputCadastro" class="btn btn-success mb-2">CADASTRAR</button>
    				</div>
    			</form>
    		</div>
    	</article>
    </section>

	<section class="container mt-4">
		<div class="row">
			<div class="col-12">
				<hr>
			</div>
		</div>
	</section>
	
	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
		<header class="row text-center mt-3 mb-3">
			<div class="col">
				<h2 class="text-dark">Provas Cadastradas</h2>
			</div>
		</header>

		<article class="row text-center ml-0 mr-0">
			<div class="table-responsive">
			<table class="table table-hover mt-2">
				<thead>
					<tr>
						<th scope="col">Nome da Prova</th>
						<th scope="col">Materia</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			</div>
        </article>

	</section>

	<footer>
	<?php include '../template/footer.html' ?>
	</footer>

</body>
</html>