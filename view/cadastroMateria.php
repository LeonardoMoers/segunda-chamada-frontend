<!DOCTYPE html>
<html>
<head>
	<title>Cadastro - Matéria</title>
	<?php include '../template/header.html' ?>
</head>
<body>
	<!-- Menu -->
	<?php include '../template/menu.html' ?>
	<!-- Menu -->

	<!-- Alert -->
	<div class="alert alert-danger mt-3" role="alert">
        Falha ao realizar o cadastro.
    </div>
    <div class="alert alert-success" role="alert">
        Cadastro realizado com sucesso.
    </div>
	<!-- Alert -->

	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
		
		<header class="row text-center mt-3 mb-3">
			<div class="col">
				<h2 class="text-dark">Cadastrar Matéria</h2>
			</div>
		</header>

		<article class="row justify-content-center ml-0 mr-0 content">
			<div class="col-auto col-sm-12 col-md-10 col-lg-8 col-xl-8">

				<form>
					<div class="form-group">
						<label for="inputMateria">Insira o nome da Matéria</label>
						<input type="text" name="inputMateria" class="form-control" placeholder="Matéria" required="required" pattern="[a-z\s]+$">
					</div>

					<div class="form-group">
						<label for="inputHorario">Insira o Horário</label>
						<input type="time" name="inputHorario" class="form-control" required="required" pattern="[0-9]{2}:[0-9]{2} [0-9]{2}$" >
					</div>

					<div class="form-group">
						<label for="inputData">Insira a Data</label>
						<input type="date" name="inputData" class="form-control" required="required" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$">
					</div>

					<div class="form-group">
						<label for="inputSemestre">Selecione o Semestre</label>
						<select name="inputSemestre" class="form-control" required="required">
							<option>...</option>
						</select>
					</div>
					<div class="form-group">
						<label for="inputToken">Token da Matéria</label>
						<input type="text" name="inputToken" class="form-control" placeholder="Token">
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success mb-3">CADASTRAR</button>
					</div>
				</form>

			</div>

		</article>
	</section>


	<section class="shadow container bg-light jumbotron-fluid p-3 mt-5">
		
		<header class="row text-center mt-4">
			<div class="col">
				<h2 class="text-dark">Matérias cadastradas</h2>
			</div>
		</header>

		<article class="row text-center ml-0 mr-0">
			<div class="table-responsive">
				<table class="table table-hover mt-5">
					<thead>
						<tr>
							<th scope="col">Materia</th>
							<th scope="col">Horário</th>
							<th scope="col">Data</th>
						</tr>
					</thead>
					<tbody>					
					</tbody>
				</table>
			</div>
		</article>
	</section>


	<footer class="footer">
		<?php include '../template/footer.html' ?>	
	</footer>
</body>
</html>