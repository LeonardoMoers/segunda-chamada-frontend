<!DOCTYPE html>
<html>
<head>
	<title>Cadastro - Materia</title>
	<?php include '../template/header.html'; ?>
	<?php include '../template/menu.html' ?>
</head>
<body>
	<header>
	
	</header>

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
			<h2>Cadastro de Matéria</h2>
		</header>

		<div class="row justify-content-center">
		<article class="shadow col-sm-12 col-md-10 col-lg-6 container bg-light align-middle jumbotron-fluid pt-4 pb-4">
			<form class="container col-11">
				<div class="form-group">
					<label for="inputNome">Insira o nome da matéria</label>
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
                <div class="form-group">
					<label for="inputData">Selecione o semestre:</label>
					<select>
                        <option>...</option>
                    </select>
				</div>
				<div class="row mt-5 text-center">
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
<hr>
</div>
<br />
	<article class="shadow col-sm-12 col-md-10 col-lg-6 container bg-light align-middle jumbotron-fluid pt-4 pb-4">
            <header class="text-center mt-4 mb-4">
                <h2 id="login">Materias cadastradas</h2>
            </header>
			<table class="table table-striped mt-5">
				<thead>
					<tr>
						<th scope"col">Materia</th>
						<th scope"col">Horário</th>
						<th scope"col">Data</th>
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