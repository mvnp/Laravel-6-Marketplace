@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Editar loja <span><sup><a href="{{ route('admin.stores.index') }}">Listar lojas</a></sup></span></h1>
            <form action='{{ route("admin.stores.update", ["store" => $store->id]) }}' method="POST" enctype="application/x-www-form-urlencoded">
                @csrf
                <div class="form-group">
                    <label for="">Nome da loja</label>
                    <input type="text" class="form-control" name="name" value="{{ $store->name }}" required />
                </div>
                <div class="form-group">
                    <label for="">Descrição</label>
                    <input type="text" class="form-control" name="description" value="{{ $store->description }}" required />
                </div>
                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $store->phone }}" required />
                </div>
                <div class="form-group">
                    <label for="">Whatsapp</label>
                    <input type="text" class="form-control" name="mobile_phone" value="{{ $store->mobile_phone }}" required />
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $store->slug }}" required />
                </div>
                <div class="mt-4 form-group">
                    <button type="submit" class="btn btn-success btn-lg">Atualizar loja</button>
                </div>
            </form>                
        </div>
    </div>
@endsection