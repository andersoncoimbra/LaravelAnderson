@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Eventos </div>

                    <div class="panel-body form-horizontal">
                        <h2>Cadastro de Eventos</h2>

                        {!! Form::open(array('url' => '/eventos')) !!}

                        <!-- Tipo Evento  -->
                        <div class="form-group">
                            {!! Form::label('tipo-evt', 'Selecione o tipo de evento', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                            <select name="tipo-evt" class="form-control" >
                            @forelse($tipoEvento as $evt)
                                <option value="{{$evt->id}}">{{$evt->nome}}</option>
                            @empty
                            @endforelse
                        </select>
                            </div>
                        </div>

                        <!-- Nome Evento  -->
                        <div class="form-group">
                            {!! Form::label('nomeevento', 'Nome do Evento', array('class' => 'col-sm-2 control-label'))!!}
                            <div class="col-sm-10">

                                <input name="nomeevento" type="text" class="form-control" placeholder="Digite o nome do evento">
                            </div>
                        </div>

                        <!-- Local Evento  -->
                        <div class="form-group">
                            {!! Form::label('localevento', 'Local do Evento', array('class' => 'col-sm-2 control-label'))!!}
                            <div class="col-sm-10">

                                <input name="localevento" type="text" class="form-control" placeholder="Digite o local do evento">
                            </div>
                        </div>

                        <!-- Data Evento  -->
                        <div class="form-group">
                            {!! Form::label('horarioevento', 'Horario do Evento', array('class' => 'col-sm-2 control-label'))!!}
                            <div class="col-sm-10">
                                <input name="horarioevento" type="time" class="form-control" placeholder="dd/mm/YY">
                            </div>
                        </div>

                        <!-- Horário Evento  -->
                        <div class="form-group">
                            {!! Form::label('dataevento', 'Data do Evento', array('class' => 'col-sm-2 control-label'))!!}
                            <div class="col-sm-10">
                                <input name="dataevento" type="date" class="form-control" placeholder="dd/mm/YY">
                            </div>
                        </div>

                        <!-- Limite do Evento  -->
                        <div class="form-group">
                            {!! Form::label('maxpart', 'Max de participantes', array('class' => 'col-sm-2 control-label'))!!}
                            <div class="col-sm-10">
                                <input name="maxpart" type="number" class="form-control" placeholder="Limite de participantes">
                            </div>
                        </div>

                        <!-- Valor do Evento  -->
                        <div class="form-group">
                            {!! Form::label('valor', 'Valor', array('class' => 'col-sm-2 control-label'))!!}
                            <div class="col-sm-10">
                                <input name="valor" type="number" class="form-control" placeholder="Valor">
                            </div>
                        </div>

                        <!-- Observações do Evento  -->
                        <div class="form-group">
                            {!! Form::label('obs', 'Observações', array('class' => 'col-sm-2 control-label'))!!}
                            <div class="col-sm-10">
                                <textarea name="obs" class="form-control"  rows="5" placeholder="Observações"></textarea>
                            </div>
                        </div>

                        <!-- Botão registra -->
                        <div class="form-group">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                        </div>

                        {!! Form::close()!!}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection