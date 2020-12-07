@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Listar lojas <span><sup><a href="{{ route('admin.stores.create') }}">Criar loja</a></sup></span></h1>
            <div class="table-responsive">
                <table class="table table-striped">
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
                                <a href='{{ route("admin.stores.edit", ["store" => $store->id]) }}' class="edit btn btn-primary">Editar</a>
                                <form id="actions" action='{{ route("admin.stores.destroy", ["store" => $store->id]) }}' method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick='return confirm("Deseja realmente excluir esta loja?");'>Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tdoby>
                </table>
                {{ $stores->links() }}
            </div>
        </div>
    </div>
@endsection