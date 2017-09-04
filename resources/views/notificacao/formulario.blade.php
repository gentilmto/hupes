@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="text-center">Cadastrar Notificação de RAM</h1></div>

                <div class="panel-body">
                   
<form action="/testesok" method="post">
  {{ csrf_field() }}
<div class="form-group" {{ $errors->has('name') ? ' has-error' : '' }}>
    <label for="textNome" class="control-label">Nome do Paciente</label>
    <input id="textNome" name="paciente_prontuario"  class="form-control" placeholder="Digite nome do Paciente..." type="text">
  </div>
<div class="form-group" class="col-md-3">
    <label for="textRg" class="control-label">Nº do Prontuario</label>
    <input id="textRg"  name="avaliacao_id" class="form-control" placeholder="insira o numero prontuario do Paciente..." type="text">
  </div>
<div class="form-group">
    <label for="textCpf" class="control-label">CPF</label>
    <input id="textCpf" name="ram_tipo_ram_id" class="form-control" placeholder="Digite seu ram_tipo_ram_id..." type="text">
  </div>
<div class="form-group">
    <label for="textIdend" class="control-label">Endereç</label>
    <input id="textIdend" name="status_notificacao_id" class="form-control" placeholder="seu endereci..." type="text">
  </div>
<div class="form-group">
    <label for="textDataNasc" class="control-label">Data Nascimento</label>
    <input id="textDataNasc" name="data_final_validacao"  class="form-control" placeholder="Digite data de Nascimento..." type="text">
  </div>
<div class="form-group">
    <label for="textPeso" class="control-label">Peso</label>
    <input id="textPeso" name="data_inicio_validacao" class="form-control" placeholder="Digite seu Nome..." type="text">
  </div>
<div class="form-group">
    <label for="textSexo" class="control-label">Sexo</label>
    <input id="textSexo" name="data_notificacao_ficha"  class="form-control" placeholder="Digite seu Nome..." type="text">
  </div>
<div class="form-group">
    <label for="textCor" class="control-label">Cor</label>
    <input id="textCor"  name="cor_id_cor" class="form-control" placeholder="Digite seu Nome..." type="text">
  </div>

<button type="submit" class="btn btn-primary">Enviar</button>
      
  </form>

               </div>
            </div>
        </div>
    </div>
</div>
@endsection

