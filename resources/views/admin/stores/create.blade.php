@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Criar lojas <span><sup><a href="{{ route('admin.stores.index') }}">Listar lojas</a></sup></span></h1>
            <form action='{{ route("admin.stores.store") }}' method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nome da loja</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" />
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Descrição</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" required value="{{ old('description') }}" />
                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required value="{{ old('phone') }}" />
                    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Whatsapp</label>
                    <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone" required value="{{ old('mobile_phone') }}" />
                    @error('mobile_phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="logo">Logo da loja</label>
                    <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" />
                    @error('logo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" required value="{{ old('slug') }}" />
                    @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mt-4 form-group">
                    <button type="submit" class="btn btn-success btn-lg">Criar loja</button>
                </div>
            </form>                
        </div>
    </div>
@endsection