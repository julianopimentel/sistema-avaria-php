<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon/favicon.ico">

    <title>Dashboard  - Sistema de Avaria</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand mr-auto mr-lg-0" href="#">DeskApps</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
          </li>
		<li class="nav-item">
            <a class="nav-link" href="#">Avarias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Relatórios</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Empresa</a>
              <a class="dropdown-item" href="#">Sistema</a>
              <a class="dropdown-item" href="#">Usuários</a>
              <a class="dropdown-item" href="#">Permissões</a>
            </div>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Sair</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="nav-scroller bg-white shadow-sm">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" data-toggle="tab" href="#produto" role="produto">Produto</a>
        <a class="nav-link" data-toggle="tab" href="#fornecedor" role="fornecedor">Fornecedor</a>
        <a class="nav-link" data-toggle="tab" href="#tipoavaria" role="tipoavaria">Tipo de Avaria</a>
        <a class="nav-link" data-toggle="tab" href="#estoque" role="estoque">Estoque</a>
        <a class="nav-link" data-toggle="tab" href="#situacao" role="situacao">Situação</a>
      </nav>
    </div>

    <main role="main" class="container">
      <div class="my-3 p-3 bg-white rounded shadow-sm">
       <div class="col">
          <div class="tab-content" id="nav-tabContent">
           	
            <div class="tab-pane fade show active" id="produto" role="tabpanel" aria-labelledby="list-home-list">
			<fieldset>
			<legend><h1>Cadastro de Produtos</h1></legend>
			
			<form action="action_cliente.php" method="post" id="form-contato" enctype="multipart/form-data">
				<div class="row">
					<label for="nome">Selecionar Foto</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="img/padrao.jpg" height="190" width="150" id="foto-cliente">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto" >
			  	</div>

			    <div class="form-group">
			      <label for="nome">Máquina</label>
			      <input type="text" class="form-control" id="maquina" name="maquina" placeholder="Infome o Nnome da máquina.">
			      <span class="msg-erro msg-nome"></span>
			    </div>

			    <div class="form-group">
			      <label for="modelo">Modelo</label>
			      <input type="modelo" class="form-control" id="modelo" name="modelo" placeholder="Informe o modelo">
			      <span class="msg-erro msg-modelo"></span>
			    </div>

			    <div class="form-group">
			      <label for="ip">IP</label>
			      <input type="ip" class="form-control" id="ip" maxlength="20" name="ip" placeholder="Informe o IP">
			      <span class="msg-erro msg-ip"></span>
			    </div>
			    <div class="form-group">
			      <label for="data_nascimento">Garantia</label>
			      <input type="data_nascimento" class="form-control" id="garantia" maxlength="10" name="garantia">
			      <span class="msg-erro msg-data"></span>
			    </div>
			    <div class="form-group">
			      <label for="status">Status</label>
			      <select class="form-control" name="status" id="status">
				    <option value="">Selecione o Status</option>
				    <option value="Ativo">Ativo</option>
				    <option value="Inativo">Inativo</option>
				  </select>
			    </div>

			    <input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-primary" id="botao">Gravar</button>
			</form>
			</fieldset>
            </div>

            <div class="tab-pane fade" id="fornecedor" role="tabpanel" aria-labelledby="list-profile-list">
              <p>Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</p>
            </div>
            <div class="tab-pane fade" id="tipoavaria" role="tabpanel" aria-labelledby="list-messages-list">
              <p>Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</p>
            </div>
            <div class="tab-pane fade" id="estoque" role="tabpanel" aria-labelledby="list-settings-list">
              <p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p>
            </div>
             <div class="tab-pane fade" id="situacao" role="tabpanel" aria-labelledby="list-settings-list">
              <p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vendor/holder.min.js"></script>
    <script src="js/offcanvas.js"></script>
  </body>
</html>
