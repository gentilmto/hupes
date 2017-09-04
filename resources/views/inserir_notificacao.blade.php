@extends('layouts.app')

@section('content')


<div class="container">
        <div><h1 align="center">{{$title or 'Cadastrar Notificação'}}</h1></div></div>
    <div class="container">
        <form action="/cadastrar/store" method="POST">
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

 






<H2> Reação Adversa Apresentada:</H2>
<br> 


 <div class="row" name="casa2" id="casa2">
                        

                        <div class="col-xs-4">
                            <div class="form-group" class="col-xs-4">
                                <div> <label >Nome Reação Apresentada :</label></div>
                                
                                <input name="reacAdv">
                            </div>
                        </div>

                        

                        <div class="col-xs-2">
                            <div class="form-group">
                                <div> <label >Inicio:</label></div>
                                <input name="dataInicioReacAdv" type="date">

                                
                            </div>
                        </div>

            <div  class="col-xs-2">
                <div><label>Fim</label></div>
                <input type="date" name="dateFimReacAdv">
            </div>


                    </div>








<!-- medicamento suspeito aqui cadastramento na tabela-->


<!-- <div class="row"  style=" height: 200px; overflow-y: scroll;" id="gradeado"> -->
<div class="panel panel-primary">
     <div class="panel-heading">MEDICAMENTOS SUSPEITOS
        </div>
          <div class="panel-body"> 
           <table class="table table-responsive table-bordered table-striped"  style=" height: 100px; overflow-y: scroll;"  id="tamed">
                    <thead>
                      <tr>
                        <th><div> <label >Medicamento Suspeito</label></div></th>
                        <th><div> <label >Via de Administração:</label></div></th>
                        <th><label >Dose Diaria:</label></th>
                        <th><label >Data Inicio:</label></th>
                        <th><label >Data Fim do uso:</label></th>
                        <th><label >Indicação Terapeutica:</label></th>
                        <th><div><label >Ação</label></th></div>
                        <th><div><label >Ação</label></th></div>
                      </tr>
                     </thead>
                     <tbody id="products-list" name="products-list">
                        <tr id="product">

                     <td><input class="medicamento2" id="medicamento2" name="medicamento2[]" class="form-control"></td>

                     <td><input class="viaAdm" type="numeric" class="form-control" id="viaAdm" name="viaAdm[]" placeholder="Via de Administração .."></td>

                     <td><input class="doseDia" type="numeric" class="form-control" id="doseDia" name="doseDia[]" placeholder="Dose Diaria.."></td>

                     <td><input class="dataInicioMed" type="date" class="form-control" id="dataInicioMed" name="dataInicioMedsus[]" placeholder="Inicio do uso.."></td>

                     <td><input class="dataFimMedsus" type="date" class="form-control"  id="dataFimMedsus" name="dataFimMedsus[]" placeholder="Fim do uso..."></td>

                     <td><input class="indTera" type="text" class="form-control"  id="indTera" name="indTera[]" placeholder="Indicação Terapeitica.."></td>
                     <td>
                      <button class="btn btn-warning btn-detail open_modal" value="">Edit</button>
                      </td>
                      <td>

                      <button onclick="RemoveTableRow2(this)" type="button">Remover</button>
                     <!-- <button class="btn btn-danger btn-delete delete-product" value="">Delete</button>-->
                      </td>
                    </tr>
                    
                </tbody>
     </table>
   </div>
</div>
 <button onclick="linhaAdd()" type="button" class="btn btn-default pull-right">Novo Medicamento Suspeito</button>

<!-- </div> -->

<!-- fim medicamento suspeito grade -->




            <!-- peguei do outro form-->
               






            

<br> 
<br> 
<br> 

<H2> Medicamentos Utilizados anteriormente</H2>
<br> 
<br> 


<div class="panel panel-primary">
     <div class="panel-heading">MEDICAMENTOS UTILIZADOS
        </div>
          <div class="panel-body"> 
           <table class="table table-responsive table-bordered table-striped"  style=" height: 100px; overflow-y: scroll;"  id="tamed2">
                    <thead>
                      <tr>
                       
                        <th><label >Nome Medicamento Utilisado:</label></th>
                        <th><label >Indicação Terapeutica:</label></th>
                        <th><label >Nome comercial e Lote:</label></th>
                        <th><label >Ação</label></th>
                                            
                        <th><div><label >Ação</label></th></div>
                      </tr>
                     </thead>
                     <tbody id="products-list" name="products-list">
                        <tr id="product">

                     <td><div class="form-group">
                                
                                {!! Form::select('medicamento[]', $listaMedicamentos, null, ['placeholder'=>'Selecione', 'class' => 'form-control','id'=>'medicamento','value'=>'']) !!}

                            </div>

                </td>

                     <td><input type="text" class="form-control" id="indTeraMed" name="indTeraMed[]" placeholder="Indicação Terapeitica.."v></td>

                     <td><input type="text" name="nomeLote" class="form-control"  placeholder="Somente se souber.."></td>
                     <td>
                      <button class="btn btn-warning btn-detail open_modal" value="">Edit</button>
                      </td>
                      <td>
                      <button class="btn btn-danger btn-delete delete-product" value="">Delete</button>
                      </td>
                    </tr>
                    
                </tbody>
     </table>
   </div>
</div>

 <button onclick="linhaAdd()" type="button" class="btn btn-default pull-right">Novo Medicamento Suspeito</button>


                
                      


            <br>
            <br>



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

<style>
  .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: show;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html.ui-autocomplete {
    height: 100px;
  }
  </style>


   <script>
       
$(document).ready(function(){
    $('#tamed').DataTable({
        "scrollY": "200px",
  
  "paging": true,
        "scrollX": true

    } );
});
$(document).ready(function(){
    $('#tamedant').DataTable({
        "scrollX": true
    } );
});

   </script>

    <script type="text/javascript">

        $( function() {

            
            $( '.medicamento2' ).autocomplete({
                minLength: 3,
                source: "/medicamento",
                
                focus: function( event, ui ) {
                    $("#medicamento2" ).val( ui.item.nome );
                    return true;
                },
                select: function( event, ui ) {
                    $( "#medicamento2" ).val( ui.item.nome );
                    //$( "#medicamento2-id" ).val( ui.item.prontuario );

                    return false;
                }
            })
                    .autocomplete( "instance" )._renderItem = function( ul, item ) {
                return $( "<li>" )
                        .append( "<div>" + "ATC:" + item.atc +" "+ item.nome + "</div>" )
                        .appendTo( ul );
            };
        } );

    </script> 



<script type="text/javascript">
                (function($) {
                    AddTableRow = function() {


 var newRow = $("<tr>");
                        var cols = "";


                      //  cols += '<td>';
                       // cols += $('#casa').prop('outerHTML');
                        //cols += '</td>';
                        cols += '<td>';
                        cols += '<button onclick="RemoveTableRow2(this)" type="button">Remover</button>';
                        cols += '</td>';




 

      var medicamento2 = document.getElementById("medicamento2").cloneNode();
      //document.getElementById("medicamento2").remove();
      //document.getElementById("medicamento2").setAttribute(hidden);
            var viaAdm = document.getElementById("viaAdm").cloneNode();
            var doseDia = document.getElementById("doseDia").cloneNode();
            var dataInicioMed = document.getElementById("dataInicioMed").cloneNode();
            var dataFim = document.getElementById("dataFimMedsus").cloneNode();
            var indTera = document.getElementById("indTera").cloneNode();

                        newRow.append(cols);
           //x document.getElementById("grade").append(medicamento2, viaAdm,doseDia,dataInicioMed,dataFim,indTera);

$("#grade").append('<br>',medicamento2,viaAdm,doseDia,dataInicioMed,dataFim,indTera);
                        return false;
                    };
                })(jQuery);


            </script>






            <script type="text/javascript">
                (function($) {
                    RemoveTableRow = function(item) {
                        var tr = $(item).closest('div');

                        tr.fadeOut(400, function() {
                            tr.remove();
                        });

                        return false;
                    }
                })(jQuery);

            </script>


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
                        $("#tamedant").append(newRow);

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


  






<script >


(function($) {
                    linhaAdd = function(item) {
    var table = $('#tamed').DataTable();
     var counter = 1;
    table.row.add( [


'<td><input class="medicamento2" id="medicamento2" name="medicamento2[]" class="form-control"></td>',

                     '<td><input class="viaAdm" type="numeric" class="form-control" id="viaAdm" name="viaAdm[]" placeholder="Via de Administração .."></td>',

                     '<td><input class="doseDia" type="numeric" class="form-control" id="doseDia" name="doseDia[]" placeholder="Dose Diaria.."></td>',

                     '<td><input class="dataInicioMed" type="date" class="form-control" id="dataInicioMed" name="dataInicioMedsus[]" placeholder="Inicio do uso.."></td>',

                     '<td><input class="dataFimMedsus" type="date" class="form-control"  id="dataFimMedsus" name="dataFimMedsus[]" placeholder="Fim do uso..."></td>',

                     '<td><input class="indTera" type="text" class="form-control"  id="indTera" name="indTera[]" placeholder="Indicação Terapeitica.."></td>',

                     '<td><button class="btn btn-warning btn-detail open_modal" value="">Edit</button></td>',
                     '<button onclick="RemoveTableRow2(this)" name="deleta" type="button">Remover</button>'
                    



        
    ] ).draw();

counter++;

 $( function() {

            
            $( '.medicamento2' ).autocomplete({
                minLength: 3,
                source: "/medicamento",
                
                focus: function( event, ui ) {
                    $( this ).val( ui.item.nome );
                    return true;
                },
                select: function( event, ui ) {
                    $( this ).val( ui.item.nome );
                    
                    //$( "#medicamento2-id" ).val( ui.item.prontuario );

                    return false;
                }
            })
                    .autocomplete( "instance" )._renderItem = function( ul, item ) {
                return $( "<li>" )
                        .append( "<div>" + "ATC:" + item.atc +" "+ item.nome + "</div>" )
                        .appendTo( ul );
            };
        } );



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



<script >


(function($) {
                    linhaDel = function(item) {
    var table = $('#tamed').DataTable();
     
$('#tamed tbody').on( 'click', 'img.icon-delete', function () {
    table
        .row( $(this).parents('tr') )
        .remove()
        .draw();
} );



  
}
})(jQuery);

</script>




    @endsection