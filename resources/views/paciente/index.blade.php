<html>
  <head>
   <title>PACIENTE</title>  
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> 
  <script src="{{asset('js/paciente.js')}}"></script>
  <script src="{{asset('js/jquery.js')}}"></script>

<style>
.ui-autocomplete {
  z-index: 215000000 !important;
}
 .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: show;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
   .ui-autocomplete {
    height: 100px;
  }
</style>


 <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
  </head>
<body>





     <div class="container">



  <div class="panel panel-primary">
             <div class="panel-heading">HUPES PACIENTE
             <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Adicionar Novo</button>
                </div>
                  <div class="panel-body"> 
                   <table class="table" id="tb01">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Prontuario</th>
                        <th>Name</th>
                        <th>Nascimento</th>
                        <th>Idade</th>
                        <th>Sexo</th>
                        <th>Raça</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                <tbody id="products-list" name="products-list">                      
                      <?php foreach ($products as $key => $value): ?>
                        
                      <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->prontuario}}</td>
                      <td>{{$value->nome}}</td>
                      <td>{{$value->dataNas}}</td>
                      <td>{{$value->idade}}</td>
                      <td>{{$value->sexo_id}}</td>
                      <td>{{$value->cor->descricao}}</td>
                      <td>
                          <button class="btn btn-warning btn-detail open_modal" value='{{$value->id}}'>Edit</button>
                          <button class="btn btn-danger btn-delete delete-product" value='{{$value->id}}'>Delete</button>
                     </td>                                       
                      </tr>
                      <?php endforeach ?>
                </tbody>
            </table>
      </div>
  </div>




    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">

           <div class="modal-content ">

             <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Paciente Cadastro</h4>
            </div>

            <div class="modal-body">
            


<form action="/paciente/" method="POST" id="frmProducts">
            {{csrf_field()}}
           
            <div>

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
                        <div class="col-xs-3">
                            <div class="form-group" class="col-xs-3">
                                <label >Nascimento:</label>
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
                                <SELECT class="form-control"name="sexo_id" id="sexo_id" placeholder="digite o sexo...">
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
                                <SELECT class="form-control" name="cor_id" id="cor_id" >

                                    <option ></option>
                                    <option value=1>Braca</option>
                                    <option value=2>Negra</option>
                                    <option value=3>Pardo</option>
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
            






            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
            <input type="hidden" id="product_id" name="product_id" value="">
            </div>
        

        </div>
     
            </div>


      </div>
  </div>
</div>



    <meta name="_token" content="{!! csrf_token() !!}" />
   

    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    -->

    <script src="{{asset('js/paciente.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
      
</body>
</html>