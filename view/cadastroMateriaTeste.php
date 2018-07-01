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

	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
		<header class="row justify-content-center mt-3 mb-3">
			<div class="col-auto">
				<h2 id="login">Cadastrar Matéria</h2>
			</div>
		</header>
		<article class="row justify-content-center ml-0 mr-0">
			<div class="col-sm-12 col-md-10 col-lg-8">
				<form>
					<div class="form-group">
						<label for="inputMateria">Insira o nome da Matéria</label>
						<input type="text" name="inputMateria" class="form-control" placeholder="Matéria" required>
					</div>
					<div class="form-group">
						<label for="inputHorario">Insira o Horário</label>
						<input type="time" name="inputHorario" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="inputData">Insira a Data</label>
						<input type="date" name="inputData" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="inputSemestre">Selecione o Semestre</label>
						<select name="inputSemestre" class="form-control">
							<option>...</option>
						</select>
					</div>
					<button type="submit" class="btn btn-success">CADASTRAR</button>
				</form>
			</div>
		</article>
	</section>

		<footer>
			<?php include '../template/footer.html' ?>	
		</footer>
	</body>
</html>