@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
<<<<<<< f2accf42ba2e5f771d8708e02ed0e4f34803a650
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

=======
                    <div class="panel-heading">Eventos </div>

                    <div class="panel-body">
                        @include('forms.addeventos')
                    </div>
                </div>
>>>>>>> Atualização com adição de recursos para dashboard
            </div>
        </div>
    </div>
@endsection