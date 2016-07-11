@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Eventos </div>

                    <div class="panel-body">
                        <h2>Novo Evento</h2>

                        {!! Form::open(array('url' => '/eventos')) !!}
                        <select name="tipo-evt">
                            @forelse($tipoEvento as $evt)
                                <option value="{{$evt->id}}">{{$evt->nome}}</option>
                            @empty
                            @endforelse
                        </select>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection