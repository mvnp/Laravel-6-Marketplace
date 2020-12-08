@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Criar produtos <span><sup><a href="{{ route('admin.products.index') }}">Listar produtos</a></sup></span></h1>
            <form action='{{ route("admin.products.store") }}' method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nome da produto</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" />
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Subtítulo</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" required value="{{ old('description') }}" />
                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Descrição</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" rows="4" name="content" required>{{ old('content') }}</textarea>
                    @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Valor</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" required value="{{ old('price') }}" />
                    @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Categorias</label>
                    <select name="categories[]" id="" class="form-control" multiple>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="photos">Foto do produto</label>
                    <input type="file" name="photos[]" class="form-control @error('photos.*') is-invalid @enderror" multiple>   
                    @error('photos') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" />
                </div>
                <div class="mt-4 form-group">
                    <button type="submit" class="btn btn-success btn-lg">Criar produto</button>
                </div>
            </form>                
        </div>
    </div>
@endsection