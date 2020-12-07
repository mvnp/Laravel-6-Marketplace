@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Listar produtos <span><sup><a href="{{ route('admin.products.create') }}">Criar produto</a></sup></span></h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produto</th>
                            <th>Loja</th>
                            <th>Preço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tdoby>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td> 
                            <td>{{ $product->store->name }}</td>
                            <td class="text-left fit">R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                            <td class="fit">
                                <a href='{{ route("admin.products.edit", ["product" => $product->id]) }}' class="edit btn btn-primary">Editar</a>
                                <form id="actions" action='{{ route("admin.products.destroy", ["product" => $product->id]) }}' method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick='return confirm("Deseja realmente excluir este produto?");'>Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tdoby>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection