@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Editar categoria <span><sup><a href="{{ route('admin.categories.index') }}">Listar categorias</a></sup></span></h1>
        <form action="{{ route('admin.categories.update', ['category' => $category->id]) }}" method="post">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <input type="text" name="description" class="form-control" value="{{ $category->description }}">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-success">Atualizar Categoria</button>
            </div>
        </form>
    </div>
</div>
@endsection