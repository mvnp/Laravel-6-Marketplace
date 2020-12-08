@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Editar loja <span><sup><a href="{{ route('admin.stores.index') }}">Listar lojas</a></sup></span></h1>
            <form action='{{ route("admin.stores.update", ["store" => $store->id]) }}' method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nome da loja</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $store->name }}" required />
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Descrição</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $store->description }}" required />
                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $store->phone }}" required />
                    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Whatsapp</label>
                    <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone" value="{{ $store->mobile_phone }}" required />
                    @error('mobile_phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="logo">Logo da loja</label>
                    <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" />
                    @error('logo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ $store->slug }}" required />
                    @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mt-4 form-group">
                    <button type="submit" class="btn btn-success btn-lg">Atualizar loja</button>
                </div>
            </form> 
            
            <div class="form-group">
                <img src="{{ asset('storage/' . $store->logo) }}" alt="" />
            </div>
        </div>
    </div>
@endsection