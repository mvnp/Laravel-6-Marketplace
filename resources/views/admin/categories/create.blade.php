@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Criar categorias <span><sup><a href="{{ route('admin.categories.index') }}">Listar categorias</a></sup></span></h1>
        <form action="{{route('admin.categories.store')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}">
                @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div>
                <button type="submit" class="btn btn-lg btn-success">Criar Categoria</button>
            </div>
        </form>
    </div>
</div>
@endsection