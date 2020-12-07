@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Editar produto <span><sup><a href="{{ route('admin.products.index') }}">Listar produtos</a></sup></span></h1>
            <form action='{{ route("admin.products.update", ["product" => $product->id]) }}' method="POST" enctype="application/x-www-form-urlencoded">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nome do produto</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" required />
                </div>
                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" class="form-control" name="description" value="{{ $product->description }}" required />
                </div>
                <div class="form-group">
                    <label for="">Descrição</label>
                    <textarea class="form-control" rows="4" name="content" required>{{ $product->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Valor</label>
                    <input type="number" class="form-control" name="price" value="{{ $product->price }}" required />
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $product->slug }}" required />
                </div>
                <div class="mt-4 form-group">
                    <button type="submit" class="btn btn-success btn-lg">Atualizar produto</button>
                </div>
            </form>                
        </div>
    </div>
@endsection