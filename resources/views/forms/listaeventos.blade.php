<table class="table">
    <tr><th>Nome</th><th>Dia / Hora</th></tr>
@forelse($eventos as $evento)
   <tr><td>{{$evento->nome}}</td> <td>{{$evento->diahora}}</td></tr>
@empty
    <th><td>Sem eventos</td></th>
@endforelse
</table>