@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Listar categorias <span><sup><a href="{{ route('admin.categories.create') }}">Criar categoria</a></sup></span></h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td class="fit">
                                    <a href='{{ route("admin.categories.edit", ["category" => $category->id]) }}' class="edit btn btn-primary">Editar</a>
                                    <form id="actions" action='{{ route("admin.categories.destroy", ["category" => $category->id]) }}' method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick='return confirm("Deseja realmente excluir esta categoria?");'>Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection