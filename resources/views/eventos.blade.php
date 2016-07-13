@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu</div>

                    <div class="panel-body form-horizontal">
                        <a href="{{url('eventos/new')}}">
                            <button type="button" class="btn btn-primary">Novo Evento</button>
                        </a>


                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de eventos</div>

                    <div class="panel-body form-horizontal">

@include('forms.listaeventos')

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection