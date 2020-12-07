@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Criar lojas <span><sup><a href="{{ route('admin.stores.index') }}">Listar lojas</a></sup></span></h1>
            <form action='{{ route("admin.stores.store") }}' method="POST" enctype="application/x-www-form-urlencoded">
                @csrf
                <div class="form-group">
                    <label for="">Nome da loja</label>
                    <input type="text" class="form-control" name="name" required />
                </div>
                <div class="form-group">
                    <label for="">Descrição</label>
                    <input type="text" class="form-control" name="description" required />
                </div>
                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" name="phone" required />
                </div>
                <div class="form-group">
                    <label for="">Whatsapp</label>
                    <input type="text" class="form-control" name="mobile_phone" required />
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" required />
                </div>
                <div class="mt-4 form-group">
                    <button type="submit" class="btn btn-success btn-lg">Criar loja</button>
                </div>
            </form>                
        </div>
    </div>
@endsection