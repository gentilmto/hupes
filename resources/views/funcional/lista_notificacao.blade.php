@extends('layouts.app')

@section('content')

<div class="container">
<div><h1 align="center">{{$title or 'Cadastrar Notificação'}}</h1></div></div>
<div class="container">












<form action="/testesok" method="POST">
	

	{{csrf_field()}}
			<div class="box-body">

<div class="row">

<div class="col-xs-4">
                  <div class="col-xs-8">
                  </div>
					         <div class="form-group" class="col-xs-2">
					                          <label >Data da Notificação:</label>
					                          <input type="date" class="form-control" id="dataNoti" name="dataNot" placeholder="Data da Notificação...">
					         </div>
              
</div>
</div>
              <div class="row">

                  <div class="col-xs-8">
                        <div class="form-group" class="col-xs-2">
                             <label >Nome Paciente:</label>
                             <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Paciente...">
                        </div>
                  </div>
                    
                      <div class="col-xs-4">
                          <div class="form-group">
                                <label >Nº Prontuario:</label>
                                <input type="number" class="form-control" id="prontuario" name="prontuario" placeholder="Numero do Prontuario...">
                         </div>

                      </div>
                   
              </div>



				<div class="box-body">

					  <div class="row">
					        <div class="col-xs-2">
					              <div class="form-group" class="col-xs-2">
					                  <label >Data de Nascimento:</label>
					                  <input type="date" class="form-control" id="dataNas" name="dataNas" placeholder="Data de Nascimento...">
					                </div>
					        </div>

						    <div class="col-xs-2">
						              <div class="form-group" class="col-xs-2">
						                  <label >Idade:</label>
						                  <input type="number" class="form-control" id="idade" name="idade" placeholder="Idade atual (Se criança coloque 0,6 para representar 6 mêses)..">
						                </div>
						    </div>
						      
					        <div class="col-xs-2">
					            <div class="form-group">
					                  <label >Sexo:</label>
					                  <SELECT class="form-control"name="sexo" id="sexo" placeholder="digite o sexo...">
						                  	<option ></option>
						                  	<option value=1>MASCULINO</option>
						                  	<option value=2>FEMININO</option>
						                  	<option value=3>DECLARADO</option>
					                  </SELECT>
					           </div>
					         </div> 

					        <div class="col-xs-2">
					                    <div class="form-group">
					                          <label >Peso:</label>
					                          <input type="numeric" class="form-control" id="peso" name="peso" placeholder="Peso em Kg...">
					                   </div>

					        </div>
					        
								<div class="col-xs-2">
													            <div class="form-group">
													                  <label >Raça/Cor:</label>
													                  <SELECT class="form-control" name="raca" id="raca" >
														                  	
														                  	<option ></option>
														                  	<option value=1>Braca</option>
														                  	<option value=2>Mulata</option>
														                  	<option value=3>Negra</option>
														                  	<option value=4>Não declarado</option>
													                  </SELECT>
													           </div>
													         </div> 


													         <div class="col-xs-2">
					         <div class="form-group">
					                          <label >Enfermaria:</label>
					                          <input type="text" class="form-control" id="enfermaria" name="enfermaria" placeholder="Enfermaria...">
					         </div>
					         
					         <br>

					        </div>	

							</div>
 

						</div>
				</div>			

	<!-- dados do paciente ate aqui-->	


<div class="panel panel-primary">
 <div class="panel-heading">HUPES CADASTRO
 <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Novo Medicamento Suspeito New Product</button>
    </div>
      <div class="panel-body"> 
       <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="products-list" name="products-list">
           @foreach ($products as $product)
            <tr id="product{{$product->id}}">
             <td>{{$product->id}}</td>
             <td>{{$product->nome}}</td>
             <td>{{$product->grupo_farmacologico_id}}</td>
              <td>
              <button class="btn btn-warning btn-detail open_modal" value="{{$product->id}}">Edit</button>
              <button class="btn btn-danger btn-delete delete-product" value="{{$product->id}}">Delete</button>
              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
       </div>



			

<script type="text/javascript">
(function($) {
  AddTableRow = function() {

    var newRow = $("<tr>");
    var cols = "";

	
	cols += '<td>';
	cols += $('#casa').prop('outerHTML');
    cols += '</td>';
	cols += '<td>';
    cols += '<button onclick="RemoveTableRow(this)" type="button">Remover</button>';
    cols += '</td>';



    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };
})(jQuery);



</script>

<script type="text/javascript">
(function($) {
  RemoveTableRow = function(item) {
    var tr = $(item).closest('tr');

    tr.fadeOut(400, function() {
      tr.remove();  
    });

    return false;
  }
})(jQuery);

</script>

<table class="table-responsive" class="table-striped" class="table-bordered" id="products-table">
<tbody >
 <tr>
   <h3>MEDICAMENTO SUSPEITO</h3>
					                  
 </tr>


<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">


<div class="container">
    <div class="row">


<tr name="aqui">

<div class="row" name="casa" id="casa">
						<div class="col-xs-3">
					            <div class="form-group">
					            	<div> <label >Medicamento Suspeito:</label></div>
					            	<input id="medicamento2" name="medicamento2[]" class="form-control">
					            </div>
						</div>

					    <div class="col-xs-2">
					                    <div class="form-group">
					                          <div> <label >Via de Administração:</label></div>
					                          <input type="numeric" class="form-control" id="viaAdm" name="viaAdm[]" placeholder="Via de Administração ..">
					                   </div>
					    </div>

 						<div class="col-xs-2">
					                    <div class="form-group">
					                          <div> <label >Dose Diaria:</label></div>
					                          <input type="numeric" class="form-control" id="doseDia" name="doseDia[]" placeholder="Dose Diaria..">
					                   </div>
					    </div>
						<div class="col-xs-2">
											                    <div class="form-group">
											                          <div> <label >Data Inicio:</label></div>
											                          <input type="date" class="form-control" id="dataInicioMed" name="dataInicioMedsus[]" placeholder="Inicio do uso..">
											                   </div>
											                   <div> <label >Data Fim:</label></div>
											                          <input type="date" class="form-control" id="dataFim" name="dataFimMedsus[]" placeholder="Fim do uso...">
											   
											   	    </div>

									   			
											                    
											                          
											                   
											   
						<div class="col-xs-3">
											                    <div class="form-group">
											                          <div> <label >Indicação Terapeutica:</label></div>
											                          <input type="text" class="form-control" id="indTera" name="indTera[]" placeholder="Indicação Terapeitica.."v>
											                   </div>
											    </div>

									 			

						</div>

</tr>

<div class="container">
    <div class="row">

</body>
<!-- Medicamento suspeito ate aqui-->


</tbody>
<tfoot>
 <tr>
   <td colspan="5" style="text-align: left;">
     <button onclick="AddTableRow()" type="button">Adicionar Medicamento Suspeito</button>
   </td>
 </tr> 
</tfoot>
</table>










<!-- peguei do outro form-->


<div class ="box-body"> 

<div class="row" id="ram">
<div class="col-xs-6"><h3>REAÇÕES DIVERSAS</h3><input name="reacAdv"class="col-xs-6" ></div>

<div class="col-xs-3"><h1>Inicio</h1><input name="dataInicioReacAdv" type="date" ></div>
<div class="col-xs-3"><h1>Fim</h1><input type="date"name="dateFimReacAdv"></div>


</div>
</div>





<script type="text/javascript">
(function($) {
  AddTableRow2 = function() {

    var newRow = $("<tr>");
    var cols = "";

	
	cols += '<td>';
	cols += $('#casa2').prop('outerHTML');
    cols += '</td>';
	cols += '<td>';
    cols += '<button onclick="RemoveTableRow2(this)" type="button">Remover</button>';
    cols += '</td>';



    newRow.append(cols);
    $("#products-table2").append(newRow);

    return false;
  };
})(jQuery);



</script>

<script type="text/javascript">
(function($) {
  RemoveTableRow2 = function(item) {
    var tr = $(item).closest('tr');

    tr.fadeOut(400, function() {
      tr.remove();  
    });

    return false;
  }
})(jQuery);

</script>




<br>
<br>


<table class="table-responsive" class="table-striped" class="table-bordered" id="products-table2">
<tbody >
 <tr>
   <h3>OUTROS MEDICAMENTOS UTILIZADOS NOS ULTIMOS 3 MESÊS</h3>
				<br>	                  
 </tr>



<tr name="aqui">

<div class="row" name="casa2" id="casa2">
						<div class="col-xs-3">
					            <div class="form-group">
					            	<div> <label >Medicamento Suspeito:</label></div>
					                 {!! Form::select('medicamento[]', $listaMedicamentos, null, ['placeholder'=>'Selecione', 'class' => 'form-control','id'=>'medicamento','value'=>'']) !!}

					            </div>
						</div>

					    <div class="col-xs-2">
					                    <div class="form-group">
					                          <div> <label >Via de Administração:</label></div>
					                          <input type="numeric" class="form-control" id="viaAdm2" name="viaAdm2[]" placeholder="Via de Administração ..">
					                   </div>
					    </div>

 						<div class="col-xs-2">
					                    <div class="form-group">
					                          <div> <label >Dose Diaria:</label></div>
					                          <input type="numeric" class="form-control" id="doseDia2" name="doseDia2[]" placeholder="Dose Diaria..">
					                   </div>
					    </div>
						<div class="col-xs-2">
											                    <div class="form-group">
											                          <div> <label >Data Inicio:</label></div>
											                          <input type="date" class="form-control" id="dataInicioMed" name="dataInicioMed[]" placeholder="Inicio do uso..">
											                   </div>
											                   <div> <label >Data Fim:</label></div>
											                          <input type="date" class="form-control" id="dataFimMed" name="dataFimMed[]" placeholder="Fim do uso...">
											   
											   	    </div>

									   			
											                    
											                          
											                   
											   
						<div class="col-xs-3">
											                    <div class="form-group">
											                          <div> <label >Indicação Terapeutica:</label></div>
											                          <input type="text" class="form-control" id="indTeraMed" name="indTeraMed[]" placeholder="Indicação Terapeitica.."v>
											                   </div>
											    </div>

									 			

						</div>

</tr>




</tbody>
<tfoot>
 <tr>
   <td colspan="5" style="text-align: left;">
     <button onclick="AddTableRow2()" type="button">Adicionar Medicamento utilizado nos ultimos 3 meses</button>
   </td>
 </tr> 
</tfoot>
</table>











<br>
<br>


		<div  class="col-md-12">
			<div><label>Nome comercial e Lote</label></div>
		<input type="text" name="nomeLote" class="col-xs-12"  placeholder="Somente se souber..">
		</div>

<br>
<br>



<DIV><h3>Informações Adicionais: <small> (Historia clinica relevante, alergia, exposição previa a este medicamento)</small> </h3></DIV>
<textarea name="infoAdcionais" class="form-control" placeholder="Descreva aqui..." rows="3"></textarea>

<DIV><h1>Tratamento da Reação Adversa:</h1></DIV>
<textarea name="tratamentoRam" class="form-control" placeholder="Descreva aqui..." rows="2"></textarea>


<h1>RESULTADO</h1>


<div class="checkbox">
  <p>RECUPERADO?</p>
  <label>
    <input name="recuperado" type="checkbox" value="true" >
    SIM
  </label>
</div>
<div class="checkbox">
  <label>
    <input name="recuperado" type="checkbox" value="false">
    NÃO
  </label>
</div>
<br>



<div class="checkbox">
    <p>RiSCO DE VIDA?</p>
  <label>
    <input name="riscoVida" type="checkbox" value="true">
    SIM
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="false">
    NÃO
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="fatal">
    FATAL
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="desconhecido">
    DESCONHECIDO
  </label>
</div>

<div class="clo-xs-3">
<div class="checkbox">
    <p>SEQUELAS?</p>
  <label>
    <input type="checkbox" value="true" name='sequelas'>
    SIM
  </label>
  <label>
      
    <input type="checkbox" value="false" name='sequelas'>
    NAO
  </label>
</div>

<textarea name="defSequelas" class="form-control" placeholder="Descreva aqui..." rows="2"></textarea>
</div>

 <!--<div class="col-xs-4">-->
            <div class="form-group">
                  <label >NOTOFICADO POR:</label>
                  <SELECT class="form-control" name="notificador"><option value=""> </option><option value=1>MEDICO</option><option value=2>FARMACEUTICO</option><option value=3>ENFERNEIRO</option></SELECT>
           </div>





<br>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar cadastro</button>
              </div>
</div>
              <!-- /.box-body -->
</div>





</form>
	

 </div>



<script>
  $( function() {
    var projects = {!! $listaMedicamentos !!};
 
    $( "#medicamento2" ).autocomplete({
      minLength: 0,
      source: projects,
      focus: function( event, ui ) {
        $( "#medicamento2" ).val( ui.item.act );
        return true;
      },
      select: function( event, ui ) {
        $( "#medicamento2" ).val( ui.item.act );
        $( "#medicamento2-id" ).val( ui.item.id_medicamento );
         
        return false;
      }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.act + "</div>" )
        .appendTo( ul );
    };
  } );

  </script>

@endsection