<div class='container pt-4'></div>
<div class='container'>
    <table class="table table-striped table-bordered table-sm text-center align-middle">
        <thread class="thread-dark">
        <tr><th scope="col">id</th><th scope="col">Nome</th><th scope="col">Tipo de alimento</th><th scope="col">Preço</th><th scope="col">restaurante_id</th><th scope="col"><a href="/pratos/create" class="btn btn-primary btn-sm">Novo Prato</a></th></tr>
            @foreach($dados as $d)
            <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->nm_dieta }}</td>
            <td>{{ $d->qt_alimento_dieta }}</td>
            <td>{{ $d->dt_inicio_dieta }}</td>
            <td>{{ $d->nm_dia_semana_dieta }}</td>
            <td>{{ $d->nm_periodo_dieta }}</td>
            <td>{{ $d->dt_termino_dieta }}</td>
            <td>
            <a href="/pratos/{{$d->id}}" class="btn btn-primary btn-sm">Excluir</a>
            <a href="/pratos/{{$d->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
            </td>
            </tr>
            @endforeach
        </thread>
    </table>
</div>