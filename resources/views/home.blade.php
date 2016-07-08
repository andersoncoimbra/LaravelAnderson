@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table">
                        @forelse($users as $user)
                            <tr><th>Nome </th><th>E-Mail </th><th>Criado em</th></tr>
                            <tr><td>{{$user->name}}</td><td>{{$user->email}}</td><td>{{$user->created_at}}</td></tr>
                        @empty
                        <p> Sem Usuário</p>
                         @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
