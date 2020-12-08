@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Editar produto <span><sup><a href="{{ route('admin.products.index') }}">Listar produtos</a></sup></span></h1>
            <form action='{{ route("admin.products.update", ["product" => $product->id]) }}' method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nome do produto</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required />
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description }}" required />
                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Descrição</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" rows="4" name="content" required>{{ $product->content }}</textarea>
                    @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Valor</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required />
                    @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Categorias</label>
                    <select name="categories[]" id="" class="form-control" multiple>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if ($product->categories->contains($category)) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="photos">Foto do produto</label>
                    <input type="file" name="photos[]" class="form-control" multiple>
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $product->slug }}" />
                </div>
                <div class="mt-4 form-group">
                    <button type="submit" class="btn btn-success btn-lg">Atualizar produto</button>
                </div>
            </form>
        </div>
    </div>
    <hr><div class="row">
        @foreach($product->photos as $photo)
            <div class="text-center col-3">
                <img src='{{ asset("storage/$photo->imagem") }}' alt="" class="img-fluid" />
                <form action="{{ route('admin.photo.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" name="photoName" value="{{ $photo->imagem }}" />
                    <button type="submit" class="btn btn-primary btn-sm mt-3" onclick="return confirm('Tem certeza que deseja remover esta imagem?');">Remover imagem</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection