@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{asset('js/ajaxscript.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
<meta name="_token" content="{!! csrf_token() !!}" />

     <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
     <script src="{{asset('js/ajaxscript.js')}}"></script>

      <h1>
        Gestão de Usuarios
      </h1>
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">Gestão Usuario</li>
      </ol>
    </section>
    @yield('action-content')
    <!-- /.content -->
  </div>


@endsection