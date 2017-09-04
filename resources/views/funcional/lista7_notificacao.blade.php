@extends('layouts.app')

@section('content')


<div class="container">
<div><h1 align="center">{{$title or 'Cadastrar Notificação'}}</h1></div></div>
<div class="container">
<form >
			<div class="box-body">

              <div class="row">

                  <div class="col-xs-8">
                        <div class="form-group" class="col-xs-2">
                             <label >Nome Paciente:</label>
                             <input type="text" class="form-control" nome='nome' id="nome" placeholder="Nome do Paciente...">
                        </div>
                  </div>
                    
                      <div class="col-xs-4">
                          <div class="form-group">
                                <label >Nº Prontuario:</label>
                                <input type="number" class="form-control" id="prontuario" nome="prontuario" placeholder="Numero do Prontuario...">
                         </div>

                      </div>
                   
              </div>



				<div class="box-body">

					  <div class="row">
					        <div class="col-xs-2">
					              <div class="form-group" class="col-xs-2">
					                  <label >Data de Nascimento:</label>
					                  <input type="date" class="form-control" id="dataN" nome="dataN" placeholder="Data de Nascimento...">
					                </div>
					        </div>

						    <div class="col-xs-2">
						              <div class="form-group" class="col-xs-2">
						                  <label >Idade:</label>
						                  <input type="number" class="form-control" id="idade" nome="idade" placeholder="Idade atual (Se criança coloque 0,6 para representar 6 mêses)..">
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
													                  <SELECT class="form-control"name="raca" id="sexo" >
														                  	
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
					                          <input type="numeric" class="form-control" id="enfermaria" name="enfermaria" placeholder="Enfermaria...">
					         </div>

					        </div>	

							</div>
 

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



<tr nama="aqui">

<div class="row" name="casa" id="casa">
						<div class="col-xs-3">
					            <div class="form-group">
					            	<div> <label >Meducamento Suspeito:</label></div>
					                 {!! Form::select('medicamento', $listaMedicamentos, null, ['placeholder'=>'Selecione', 'class' => 'form-control','id'=>'medicamento']) !!}

					            </div>
						</div>

					    <div class="col-xs-2">
					                    <div class="form-group">
					                          <div> <label >Via de Administração:</label></div>
					                          <input type="numeric" class="form-control" id="viaAdm" name="viaAdm" placeholder="Via de Administração ..">
					                   </div>
					    </div>

 						<div class="col-xs-2">
					                    <div class="form-group">
					                          <div> <label >Dose Diaria:</label></div>
					                          <input type="numeric" class="form-control" id="viaAdm" name="viaAdm" placeholder="Dose Diaria..">
					                   </div>
					    </div>
						<div class="col-xs-2">
											                    <div class="form-group">
											                          <div> <label >Data Inicio:</label></div>
											                          <input type="numeric" class="form-control" id="viaAdm" name="viaAdm" placeholder="Inicio do uso..">
											                   </div>
											                   <div> <label >Data Fim:</label></div>
											                          <input type="numeric" class="form-control" id="viaAdm" name="viaAdm" placeholder="Fim do uso...">
											   
											   	    </div>

									   			
											                    
											                          
											                   
											   
						<div class="col-xs-3">
											                    <div class="form-group">
											                          <div> <label >Indicação Terapeutica:</label></div>
											                          <input type="text" class="form-control" id="viaAdm" name="viaAdm[]" placeholder="Indicação Terapeitica.."v>
											                   </div>
											    </div>

									 			

						</div>

</tr>




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
<div class="col-xs-6"><h3>REAÇÕES DIVERSAS</h3><input class="col-xs-6" ></div>

<div class="col-xs-3"><h1>Inicio</h1><input type="date" ></div>
<div class="col-xs-3"><h1>Fim</h1><input type="date"></div>


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







<table class="table-responsive" class="table-striped" class="table-bordered" id="products-table2">
<tbody >
 <tr>
   <h3>OUTROS MEDICAMENTOS UTILIZADOS NOS ULTIMOS 3 MESÊS</h3>
					                  
 </tr>



<tr nama="aqui">

<div class="row" name="casa" id="casa2">
						<div class="col-xs-3">
					            <div class="form-group">
					            	<div> <label >Meducamento Suspeito:</label></div>
					                 {!! Form::select('medicamento', $listaMedicamentos, null, ['placeholder'=>'Selecione', 'class' => 'form-control','id'=>'medicamento']) !!}

					            </div>
						</div>

					    <div class="col-xs-2">
					                    <div class="form-group">
					                          <div> <label >Via de Administração:</label></div>
					                          <input type="numeric" class="form-control" id="viaAdm" name="viaAdm" placeholder="Via de Administração ..">
					                   </div>
					    </div>

 						<div class="col-xs-2">
					                    <div class="form-group">
					                          <div> <label >Dose Diaria:</label></div>
					                          <input type="numeric" class="form-control" id="viaAdm" name="viaAdm" placeholder="Dose Diaria..">
					                   </div>
					    </div>
						<div class="col-xs-2">
											                    <div class="form-group">
											                          <div> <label >Data Inicio:</label></div>
											                          <input type="numeric" class="form-control" id="viaAdm" name="viaAdm" placeholder="Inicio do uso..">
											                   </div>
											                   <div> <label >Data Fim:</label></div>
											                          <input type="numeric" class="form-control" id="viaAdm" name="viaAdm" placeholder="Fim do uso...">
											   
											   	    </div>

									   			
											                    
											                          
											                   
											   
						<div class="col-xs-3">
											                    <div class="form-group">
											                          <div> <label >Indicação Terapeutica:</label></div>
											                          <input type="text" class="form-control" id="viaAdm" name="viaAdm[]" placeholder="Indicação Terapeitica.."v>
											                   </div>
											    </div>

									 			

						</div>

</tr>




</tbody>
<tfoot>
 <tr>
   <td colspan="5" style="text-align: left;">
     <button onclick="AddTableRow2()" type="button">Adicionar Medicamento ultimos 3 meses</button>
   </td>
 </tr> 
</tfoot>
</table>











<br>
<br>


<div  class="col-md-12">
	<div><label>Nome comercial e Lote</label></div>
<input type="text" class="col-xs-12"  placeholder="Somente se souber..." value=''>
</div>

<br>
<br>



<DIV><h3>Informações Adicionais: <small> (Historia clinica relevante, alergia, exposição previa a este medicamento)</small> </h3></DIV>
<textarea class="form-control" placeholder="Descreva aqui..." rows="3"></textarea>

<DIV><h1>Tratamento da Reação Adversa:</h1></DIV>
<textarea class="form-control" placeholder="Descreva aqui..." rows="2"></textarea>



<h1>RESULTADO</h1>


<div class="checkbox">
  <p>RECUPERADO?</p>
  <label>
    <input type="checkbox" value="">
    SIM
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="">
    NÃO
  </label>
</div>
<br>



<div class="checkbox">
    <p>RiSCO DE VIDA?</p>
  <label>
    <input type="checkbox" value="">
    SIM
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="">
    NÃO
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="">
    FATAL
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" value="">
    DESCONHECIDO
  </label>
</div>

<div class="clo-xs-3">
<div class="checkbox">
    <p>SEQUELAS?</p>
  <label>
    <input type="checkbox" value="" name='sequelas'>
    SIM
  </label>
  <label>
      
    <input type="checkbox" value="" name='sequelas'>
    NAO
  </label>
</div>

<textarea class="form-control" placeholder="Descreva aqui..." rows="2"></textarea>
</div>

 <!--<div class="col-xs-4">-->
            <div class="form-group">
                  <label >NOTOFICADO POR:</label>
                  <SELECT class="form-control"><option value=1>MEDICO</option><option value=2>FARMACEUTICO</option><option value=3>ENFERNEIRO</option></SELECT>
           </div>





<br>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
</div>
              <!-- /.box-body -->
</div>





</form>
	

 </div>

@endsection