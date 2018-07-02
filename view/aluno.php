<!DOCTYPE html>
<head>
	<title>Página do Aluno</title>
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
				<h2 class="text-dark">Cadastrar Requisição</h2>
			</div>
		</header>

		<article class="row justify-content-center ml-0 mr-0">
			<div class="col-sm-12 col-md-10 col-lg-8 col-xl-8">
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
					</div>
					<div class="text-center">
						<button type="submit" name="inputCadastro" class="btn btn-success mb-2">ENVIAR</button>
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
				<h2 class="text-dark">Requisições</h2>
			</div>
		</header>

		<article class="row text-center ml-0 mr-0">
			<div class="table-responsive">

				<table class="table table-hover mt-2">
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
						<tr>
							<th>
								<img src="../imagens/submit.png" style="height: 30px">
							</th>
							<td>Pendente</td>
						</tr>
						<tr>
							<th>
								<img src="../imagens/check.png" style="height: 30px">
							</th>
							<td>Confirmado pelo cordenador</td>
						</tr>
						<tr>
							<th>
								<img src="../imagens/2check.png" style="height: 30px">
							</th>
							<td>Confirmado por ambos</td>
						</tr>
						<tr>
							<th>
								<img src="../imagens/closed.png" style="height: 30px">
							</th>
							<td>Recusado</td>
						</tr>				
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