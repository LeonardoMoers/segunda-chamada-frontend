<!DOCTYPE html>
<head>
	<title>Página do Professor</title>
	<?php include '../template/menu.html' ?>
	<?php include '../template/header.html'; ?>
</head>
<body>

	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">

		<header class="row text-center mt-3 mb-3">
			<div class="col">
				<h2 class="text-dark">Requisições Pendentes</h2>
			</div>
		</header>

		<article class="row text-center ml-0 mr-0">
		<div class="table-responsive">
			<table class="table table-hover mt-2 text-center">
				<thead>
					<tr>
						<th scope"col">Status</th>
                        <th scope"col">Avaliação</th>
                        <th scope"col">Materia</th>
                        <th scope"col">Justificativa</th>
                        <th scope"col">Responder</th>                                                
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>
							<img src="../imagens/check.png" style="height: 30px">
						</th>
                        <td>Pendente</td>
                        <td></td>
                        <td>
                            <a href="">
                                <img src="../imagens/arquivo.png" style="height: 30px">
                            </a>
                        </td>
                        <td>
                            <div class="form-row justify-content-center">
                                <button type="button" class="btn btn-success">Aceitar</button>
                                <button type="button" class="btn btn-danger">Recusar</button>
                            </div>
                        </td>
					</tr>				
				</tbody>
			</table>
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
		<header class="row text-center mt-3 mb-3">
			<div class="col">
				<h2 class="text-dark">Requisições Avaliadas</h2>
			</div>
		</header>

		<article class="row text-center ml-0 mr-0">
		<div class="table-responsive">
			<table class="table table-hover mt-2 text-center">
				<thead>
					<tr>
						<th scope"col">Status</th>
                        <th scope"col">Avaliação</th>
                        <th scope"col">Materia</th>
                        <th scope"col">Justificativa</th>
						<th scope"col">editar</th>                        
                                                
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>
							<img src="../imagens/2check.png" style="height: 30px">
						</th>
                        <td>Confirmado por ambos</td>
                        <td></td>
                        <td>
                            <a href="">
                                <img src="../imagens/arquivo.png" style="height: 30px">
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning ml-2">Editar</button>                            
                        </td>
					</tr>
					<tr>
						<th>
							<img src="../imagens/closed.png" style="height: 30px">
						</th>
                        <td>Recusado</td>
                        <td></td>
                        <td>
                            <a href="">
                                <img src="../imagens/arquivo.png" style="height: 30px">
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning ml-2">Editar</button>                            
                        </td>
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