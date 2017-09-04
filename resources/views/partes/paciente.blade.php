@extends('layouts.app')

@section('content')



<form action="/cadastrar/store" method="POST">
            {{csrf_field()}}
           
            <div class="container">

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

<BUTTON type="subimit">sibimit</BUTTON>
                </div>
            </div>


@endsection