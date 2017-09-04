@extends('notifica.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
   
  <!-- /.box-header -->
  <div class="box-body">
      
      <?php 
//dd($listaNotificacao);
       ?>

<?php if (!is_null($listaNotificacao)): ?>
  
  <div class="panel panel-primary">
             <div class="panel-heading">HUPES PACIENTE
             <!--<button id="btn_add" name="btn_add" class="btn btn-default pull-right">Adicionar Novo</button>
             -->

             <a href="cadastrar/create" class="btn btn-default pull-right">Adicionar Novo</a>
                </div>
                  <div class="panel-body"> 
                   <table class="table box-body table-responsive no-padding">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Data Entrada</th>
                        <th>Prontuario</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                <tbody id="products-list" name="products-list">                      
                    <?php foreach ($listaNotificacao as $key => $value): ?>
                      
                     <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->dataEntrada}}</td>
                      <td>{{$value->paciente_prontuario}}</td>
                    

                      <td>
                          <button class="btn btn-warning btn-detail open_modal" value="{{$value->id}}">Edit</button>
                          <button class="btn btn-danger btn-delete delete-product" value="{{$value->id}}">Delete</button>
                     </td>                                       
                     </tr>
                    <?php endforeach ?>
               

                </tbody>
            </table>
      </div>
  </div>
    

      
  </div>
      
    </section>




    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">

           <div class="modal-content ">

             <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Notificações</h4>
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
                        <div class="col-xs-2">
                            <div class="form-group" class="col-xs-2">
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
   

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('js/paciente.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    








<?php endif ?>    
    <!-- /.content -->
  
@endsection