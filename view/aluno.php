<!DOCTYPE html>
<html>
<head>
	<title>Página do Aluno</title>
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

	<section class="container mt-2 pt-3 pb-3">
		<header class="row mt-2 mb-4 justify-content-center">
			<h2>Formulário de Segunda Chamada</h2>
		</header>
		<article class="row shadow justify-content-center bg-light align-middle jumbotron-fluid pt-5">
			<div class="col-sm-12 col-md-10 col-lg-8">
				<form>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label for="inputMotivo">Descreva o motivo da ausência</label>
							<input type="text" class="form-control" name="inputMotivo" placeholder="Motivo" required>
						</div>
						<div class="form-group col-sm-6">
							<label for="inputMateria">Selecione a matéria</label>
							<select name="inputMateria" class="form-control">
								<option selected>Matérias</option>
								<option>Banco de Dados II</option>
								<option>Eng. Software I</option>
								<option>Economia</option>
								<option>WEB I</option>
							</select>
						</div>
						<div class="form-group col-sm-6">
							<label for="inputArquivo">Submeta um atestado</label>
							<input type="file" class="form-control form-control-sm" name="inputArquivo" placeholder="Atestado" required>
						</div>
						<div class="form-group col-sm-6">
							<label for="inputAvaliacao">Informe a avaliação perdida</label>
							<input type="text" class="form-control" name="inputAvaliacao" placeholder="Avaliação" required>
						</div>

						<div class="form-group col-12 text-center mt-4">
							<button type="submit" class="btn btn-success">ENVIAR</button>	
						</div>

					</div>
				</form>
				<br />
			</div>
		</article>
	</section>
	<div class="row">
		<div class="col-12 mt-3 mb-0">
			<hr>
		</div>
	</div>

	<section class="container mt-2 pt-1 pb-3">
		<header id="form-chamada-aluno" class="row justify-content-center mb-4">
			<h2>Requisições</h2>
		</header>
		<article class="col-sm-12 col-md-10 col-lg-6 container bg-light align-middle jumbotron-fluid pt-4 pb-4">
			<table class="table table-hover shadow mt-5">
				<thead>
					<tr>
						<th scope"col">Status</th>
						<th scope"col">Professor</th>
						<th scope"col">Avaliação</th>
						<th scope"col">Data</th>
						<th scope"col">Local</th>
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