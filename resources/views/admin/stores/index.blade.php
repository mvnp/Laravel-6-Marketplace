@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Listar lojas <span>
                @if(!$store) <sup><a href="{{ route('admin.stores.create') }}">Criar loja</a></sup></span> @endif
            </h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Loja</th>
                            <th class="fit">Total Produtos</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tdoby>
                        <tr>
                            <td>{{ $store->id }}</td>
                            <td>{{ $store->name }}</td>
                            <td>{{ $store->products->count() }}</td>
                            <td class="fit">
                                <a href='{{ route("admin.stores.edit", ["store" => $store->id]) }}' class="edit btn btn-primary">Editar</a>
                                <form id="actions" action='{{ route("admin.stores.destroy", ["store" => $store->id]) }}' method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick='return confirm("Deseja realmente excluir esta loja?");'>Excluir</button>
                                </form>
                            </td>
                        </tr>
                    </tdoby>
                </table>
            </div>
        </div>
    </div>
@endsection