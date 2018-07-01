<!DOCTYPE html>
<html>
<head>
	<title>Cadastro - Prova</title>
	<?php include '../template/menu.html' ?>
	<?php include '../template/header.html'; ?>
</head>
<body>
	<header>

	</header>
	<div class="alert alert-danger mt-3" role="alert">
        Falha ao realizar o cadastro.
    </div>
    <div class="alert alert-success" role="alert">
        Cadastro realizado com sucesso.
    </div>

	<!-- Menu -->
	<!-- Menu -->

	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
		<header class="row justify-content-center mt-3 mb-3">
			<div class="col-auto">
				<h2 id="login">Cadastrar Prova</h2>
			</div>
		</header>
		<article class="row justify-content-center ml-0 mr-0">
			<div class="col-sm-12 col-md-10 col-lg-8">
				<form>
				<div class="form-group">
					<label for="inputNome">Insira o nome da Prova</label>
					<input type="text" name="Nome" placeholder="Nome" class="form-control" required>
				</div>
				<div class="mt-5 form-group">
					<label for="inputData">Selecione a materia:</label>
					<select>
                        <option>...</option>
                    </select>
				</div>
				<div class="row mt-4 text-center">
					<div class="col-12">
						<input type="submit" name="inputCadastro" class="btn btn-success btn-md float-left mb-2" value="CADASTRAR">
					</div>
				</div>
				</form>
			</div>
		</article>
	</section>

    <div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-12">
				<hr>
			</div>
		</div>
	</div>
	
	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
		<header class="row justify-content-center mt-3 mb-3">
			<div class="col-auto">
				<h2 id="login">Provas Cadastradas</h2>
			</div>
		</header>
		<article class="row justify-content-center ml-0 mr-0">
			<table class="table table-hover shadow mt-2 text-center">
				<thead>
					<tr>
						<th scope"col">#</th>
						<th scope"col">Nome da Prova</th>
						<th scope"col">Materia</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
        </article>
	</section>
	<footer>
	<?php include '../template/footer.html' ?>
	</footer>

</body>
</html>