<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}" />
    <title>Lohas | Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listar lojas</h1>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Loja</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tdoby>
                            @foreach($stores as $store)
                            <tr>
                                <td>{{ $store->id }}</td>
                                <td>{{ $store->name }}</td>
                                <td class="fit">
                                    <a href='{{ url("admin/stores/edit/$store->id") }}' class="btn btn-primary">Editar</a>
                                    <a href='{{ url("admin/stores/delete/$store->id") }}' class="btn btn-danger" onclick='return confirm("Deseja realmente excluir este produto?");'>Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tdoby>
                    </table>
                    {{ $stores->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>