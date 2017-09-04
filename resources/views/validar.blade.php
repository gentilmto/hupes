
@extends('layouts.app')

@section('content')



<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de Notificações</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: block;">
              <div class="table-responsive">
                <table class="table no-margin table-bordered table-hover  table-condensed " id="ta01" >
                  <thead>
                  <tr>
                    <th>Ordem</th>
                    <th>Item Notificação</th>
                    <th>Status</th>
                    <th>Notificador</th>
                  </tr>
                  </thead>
                  
<?php foreach ($listaNotificacao as $key => $value): ?>
  

                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">{{$value->id}}</a></td>
                    <td>{{$value->data_notificacao_ficha}}</td>
                   
                    <?php if ($value->status_notificacao_id==1): ?>
                      

                      <td><span class="label label-success">{{$value->status_notificacao_id}} AVALIADA E ENVIADA</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
                    </td>

                                       <?php else: ?>
                   
                   
                   <?php if ($value->status_notificacao_id==2): ?>
                    
                    <td><span class="label label-warning">{{$value->status_notificacao_id}} AVALIADA</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
                    </td>

                    <?php endif ?> 

                   
                   <?php if ($value->status_notificacao_id==3): ?>
                    
                    <td><span class="label label-info">{{$value->status_notificacao_id}} ANDAMENTO</span></td>
                    
                    <td>
                      <div class="sparkbar" data-color="#00c0ef" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
                    </td>


                                        <?php endif ?> 
                    
                   <?php if ($value->status_notificacao_id==4): ?>
                    
                    <td><span class="label label-danger">{{$value->status_notificacao_id}}  AGUARDANDO DISTRIBUIÇÃO</span></td>
                                         <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
                    </td>


                                        <?php endif ?> 
                    
                   



                   <?php endif ?>
                    
                    </tr>
                  
<?php endforeach ?>

                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Notificação de manchas na pele</td>
                    <td><span class="label label-success">Shipped</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix" style="display: block;">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>

<script>
  
$('#ta01').dataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
</script>


<script>
       
$(document).ready(function(){
    $('#tamed').DataTable();
});

   </script>

          @endsection