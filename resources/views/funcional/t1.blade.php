@extends('layouts.app')

@section('content')

<div class="container">
<div><h1 align="center">{{$title or 'Cadastrar Notificação'}}</h1></div></div>
<div class="container">
<form >
					        
							
					

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

<table class="table-striped" class="table-bordered" id="products-table">
<tbody >
 <tr>
   <h3>MEDICAMENTO SUSPEITO</h3>
					                  
 </tr>



<tr nama="aqui">

<div class="row" name="casa" id="casa">
						<div class="col-xs-3">
					            <div class="form-group">
					            	<div> <label >Meducamento Suspeito:</label></div>
					                 {!! Form::select('medicamento', '', null, ['placeholder'=>'Selecione', 'class' => 'form-control','id'=>'medicamento']) !!}
-->
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