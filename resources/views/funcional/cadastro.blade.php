<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 3: Layouts</title>

    <link href="/adminlte/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/adminlte/dist/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>
    <div class="container">
    <header class="row">
     <h1>Cadastro de Notificação</h1>
   </header>
   <div class="row">
       <div role="main">
           <!-- conteudo principal -->
      <div class="form-group"><script type="text/javascript" src="../js/jquery.js"></script></div>
     <div><script type="text/javascript" src="../js/functions.js"></script></div>
     <div> <table id="details-table" class="table table-bordered"></div>
  
<form id="formExemplo" data-toggle="validator" role="form" method="POST" action="{{ route('pessoa') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="textNome" class="control-label">Nome</label>
    <input id="textNome" class="form-control" placeholder="Digite seu Nome..." type="text">
 <!-- </div>
    <div class="form-group">
    <label for="textData" class="control-label">Data</label>
    <input id="textData" class="form-control" placeholder="Digite a data..." type="text">
  </div>
  
  <div class="form-group">
    <label for="inputEmail" class="control-label">Email</label>
    <input id="inputEmail" class="form-control" placeholder="Digite seu E-mail" type="email">
  </div>
  
  <div class="form-group">
    <label for="inputPassword" class="control-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua Senha...">
  </div>
  
  <div class="form-group">
    <label for="inputConfirm" class="control-label">Confirme a Senha</label>
    <input type="password" class="form-control" id="inputConfirm" placeholder="Confirme sua Senha...">
  </div>
  
  <div class="checkbox">
<label>
      <input type="checkbox"> Marque aqui este item.
    </label>
  
  </div>-->
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>
   <footer class="row">
       configuracao rodape
   </footer>
   
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../forms/validator.min.js"></script>
</body>
</html>