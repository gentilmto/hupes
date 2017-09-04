<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>hupes listar</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


   <h1>Lista de Cor</h1>


    <SELECT  name='cor' id='cor'>

              <?php foreach ($data as $d): ?>
                    <option value={{$d->nome}}>
                        <div class="col-md-8">

                        <h1>  <div class="col-md-4">{{$d->cor->descricao}}</div> </h1>
                        </div>
                    </option>
                            
              <?php endforeach ?>

    </SELECT>
           

  <select id='cor_nome' >
      
      <option>padrao</option>
  
  </select>



<script type="text/javascript">

     $('#cor').on('change',function(){

                    $.get('/inicio/getCor', function(data){ 
              
                    $('select[id=cor_nome]').empty();

                    $.each(data, function(key,value)            

                   { 
                    $('select[id=cor_nome]').append('<option value=' + value.prontuario + '>' + value.nome + '</option>');

                 });
                  });

                     
    });


</script>

  </body>


</html>