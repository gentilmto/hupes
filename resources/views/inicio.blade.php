<!DOCTYPE html>
<!--
  This is a starter template page. Use this page to start your new project from
  scratch. This page gets rid of all links and provides the needed markup only.
  -->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HU | HUPES</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link href="http://localhost:8000/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="http://localhost:8000/adminlte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8000/adminlte/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8000/adminlte/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="http://localhost:8000/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
      page. However, you can choose any other skin. Make sure you
      apply the skin class to the body tag so the changes take effect.
      -->
    <link href="http://localhost:8000/adminlte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8000/css/app-template.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
  <body class="hold-transition skin-blue sidebar-mini">

  
    <div class="wrapper">
    <!-- Main Header -->
    <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">HUPES</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
             


              
            
            </ul>
          </li>
       


<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
             
          <!-- Notifications: style can be found in dropdown.less -->
          
                       
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
         
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>


      </ul>
      


      </div>
    </nav>
  </header>

  
   <form id="logout-form" action="http://localhost:8000/logout" method="POST" style="display: none;">
      <input type="hidden" name="_token" value="x8OUcHsHhbMpF9DMZLPv0TaAA9FZAWLLrf0C9qtF">
   </form>


<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
     

      <!--  aqui vc muda a homeHome tab content -->
    
     <div class="tab-pane" id="control-sidebar-home-tab">
        
       

      </div>


      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>    <!-- Sidebar -->
   


    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://localhost:8000/adminlte/dist/img/user2-160x160.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-center info">
          <p>GERENCIADOR DE RAM</p>
          <!-- Status -->
          
          <div>
          <p>Reações Adversasa Medicamento</p>
            
          </div>
          
        </div>
      </div>

   
      <!-- Sidebar Menu -->
           <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>    



    



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    
        
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" >
                <h2 class="text-center" class="danger">Gerenciador de Reações Adversas a Medicamento (RAM)</h2></div>

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
            <a href="register" class="small-box-footer">Aperte aqui para cadastrar usuario <i class="fa fa-arrow-circle-right"></i></a>
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

    <!-- /.content-wrapper -->
    <!-- Footer -->
   




     <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Hupes</a>.</strong> All rights reserved.
  </footer>    <!-- ./wrapper -->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.3 -->
    <script src="http://localhost:8000/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="http://localhost:8000/js/bootstrap.min.js" type="text/javascript"></script>
    <script  src="http://localhost:8000/adminlte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript" ></script>
    <script  src="http://localhost:8000/adminlte/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript" ></script>
    <script  src="http://localhost:8000/adminlte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript" ></script>
    <script  src="http://localhost:8000/adminlte/plugins/fastclick/fastclick.js" type="text/javascript" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script  src="http://localhost:8000/adminlte/plugins/input-mask/jquery.inputmask.js" type="text/javascript" ></script>
    <script  src="http://localhost:8000/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript" ></script>
    <script  src="http://localhost:8000/adminlte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript" ></script>
    <script  src="http://localhost:8000/adminlte/plugins/daterangepicker/daterangepicker.js" type="text/javascript" ></script>
    <script  src="http://localhost:8000/adminlte/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript" ></script>
    <!-- AdminLTE App -->
    <script src="http://localhost:8000/adminlte/dist/js/app.min.js" type="text/javascript"></script>
    <script src="http://localhost:8000/adminlte/dist/js/demo.js" type="text/javascript"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
      <script>
      $(document).ready(function() {
        //Date picker
        $('#birthDate').datepicker({
          autoclose: true,
          format: 'yyyy/mm/dd'
        });
        $('#hiredDate').datepicker({
          autoclose: true,
          format: 'yyyy/mm/dd'
        });
        $('#from').datepicker({
          autoclose: true,
          format: 'yyyy/mm/dd'
        });
        $('#to').datepicker({
          autoclose: true,
          format: 'yyyy/mm/dd'
        });
    });
</script>
  </body>
</html>