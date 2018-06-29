<!DOCTYPE html>
<html>
<head>
	<title>Cadastro - Materia</title>
	<?php include '../template/header.html'; ?>
</head>
<body>
	<header>

	</header>

	<!-- Menu -->
	<!-- Menu -->

	<section class="container">
		<header class="text-center mt-4 mb-4">
			<h2>Cadastro de Prova</h2>
		</header>

		<div class="row justify-content-center">
		<article class="shadow col-sm-12 col-md-10 col-lg-6 container bg-light align-middle jumbotron-fluid pt-4 pb-4">
			<form class="container col-11">
				<div class="form-group">
					<label for="inputNome">Insira o nome da Prova</label>
					<input type="text" name="Nome" placeholder="Nome" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="inputHora">Insira o Horário</label>
					<input type="Time" name="hora" class="form-control" required>
                </div>
                <div class="form-group">
					<label for="inputData">Insira a Data</label>
					<input type="Date" name="data"  class="form-control" required>
                </div>
				<div class="row mt-5 text-center">
					<div class="col-12">
						<input type="submit" name="inputCadastro" class="btn btn-success btn-lg" value="CADASTRAR">
					</div>
				</div>
			</form>
		</article>
		</div>
    </section>
    <br />
        <article class="col-sm-12 col-md-10 col-lg-6 container bg-light align-middle jumbotron-fluid pt-4 pb-4">
            <header class="text-center mt-4 mb-4">
                <h2 id="#login">Provas cadastradas</h2>
            </header>
        </article>

	<footer>
		
	</footer>
</body>
</html>