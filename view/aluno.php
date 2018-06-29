<!DOCTYPE html>
<html>
<head>
	<title>Página do Aluno</title>
	<?php include '../template/header.html'; ?>
</head>
<body>
	<header>

	</header>

	<!-- Menu -->
	<?php include '../template/menu.html' ?>
	<!-- Menu -->

	<section class="container mt-2 pt-3 pb-3">
		<header class="row mt-2 mb-4 justify-content-center">
			<h2>Formulário de Segunda Chamada</h2>
		</header>
		<article class="row justify-content-center">
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
			</div>
		</article>
		<div class="row">
		<div class="col-12 mt-3">
			<hr>
		</div>
	</div>
	</section>

	<section class="container mt-2 pt-3 pb-3">
		<header id="form-chamada-aluno" class="row justify-content-center mb-4">
			<h2>Requisições</h2>
		</header>
		<article class="row">
			<div class="col-12">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Status</th>
								<th>Professor</th>
								<th>Prova</th>
								<th>Data</th>
								<th>local</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Recusado</td>
								<td> John Boo </td>
								<td>Estrutura II</td>
							</tr>
							<tr>
								<td>Pendente</td>
								<td> Michael Robinson </td>
								<td>WEB I</td>
							</tr>
							<tr>
								<td>Aprovado</td>
								<td> Alexander Robson </td>
								<td>Banco de Dados</td>
								<td>30/10/2018</td>
								<td>Sala B03</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</article>
	</section>

	<footer>


	</footer>

</body>
</html>