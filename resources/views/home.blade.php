  @extends('layouts.app-template')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
      </h1>
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">User Mangement</li>
      </ol>
    </section>
    



    
    @yield('action-content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" ><h1 class="text-center" class="danger">Gerenciador de Reações Adversas a Medicamento (RAM)</h1></div>

                <div class="panel-body">
                 <div class="row">
                      <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-aqua">
                          <div class="inner">
                            <h3 class="text-center" >Notificações</h3>

              <!--<p>Notificações</p>-->
                          </div class="inner">
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                              <a href="cadastrar" class="small-box-footer">Aperte aqui para cadastrar <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Validações<sup style="font-size: 20px"></sup></h3>

              <!--<p>Bounce Rate</p>-->
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="validacao" class="small-box-footer">Aperte aqui para validar notifição <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Usuarios</h3>

              <!--<p>User Registrations</p>-->
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="user-management" class="small-box-footer">Aperte aqui para cadastrar usuario <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Relatórios</h3>

             <!-- <p>Unique Visitors</p>-->
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="relatorios" class="small-box-footer">Aperte aqui para relatorios <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

<span style="center">Cadastro e Gerenciamento de Reações Adversa a Medicamentos</span>

                   
                </div>
            </div>
        </div>
    </div>
</div>




    <!-- /.content -->
  </div>





@endsection