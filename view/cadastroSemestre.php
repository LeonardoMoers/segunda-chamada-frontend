<!DOCTYPE html>
<head>
	<title>Cadastro - Semestre</title>
	<?php include '../template/header.html'; ?>
	<?php include '../template/menu.html' ?>
</head>
<body>
	<!-- Menu -->
	<!-- Menu -->

    <div class="alert alert-danger mt-3" role="alert">
        Falha ao realizar o cadastro.
    </div>
    <div class="alert alert-success" role="alert">
        Cadastro realizado com sucesso.
    </div>

	<section class="container">
		<header class="text-center mt-4 mb-4">
			<h2>Cadastro de Semestre</h2>
		</header>

		<div class="row justify-content-center">
		<article class="shadow col-sm-12 col-md-10 col-lg-6 container bg-light align-middle jumbotron-fluid pt-4 pb-4">
			<form class="container col-11">
				<div class="form-group">
					<label for="inputNome">Insira o semestre</label>
					<input type="text" name="Nome" placeholder="Nome" class="form-control" required>
				</div>
				<div class="row mt-4 text-center">
					<div class="col-12">
						<input type="submit" name="inputCadastro" class="btn btn-success" value="CADASTRAR">
					</div>
				</div>
			</form>
		</article>
		</div>
    </section>
    <br />
	<div>
		<hr class="shadow">
	</div>
	<br /> 
        <article class="shadow col-sm-12 col-md-10 col-lg-6 container bg-light align-middle jumbotron-fluid pt-4 pb-4">
            <header class="text-center mt-4 mb-4">
                <h2 id="login">Semestres cadastrados</h2>
            </header>
			<table class="table table-striped mt-5">
				<thead>
					<tr>
						<th scope"col">#</th>
						<th scope"col">Semestre</th>
						<th scope"col">Materia</th>
					</tr>
				</thead>
				<tbody>					
				</tbody>
			</table>
        </article>

	<footer>
		<?php include '../template/footer.html' ?>
	</footer>
</body>
</html>