@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Criar produtos <span><sup><a href="{{ route('admin.products.index') }}">Listar produtos</a></sup></span></h1>
            <form action='{{ route("admin.products.store") }}' method="POST" enctype="application/x-www-form-urlencoded">
                @csrf
                <div class="form-group">
                    <label for="">Nome da produto</label>
                    <input type="text" class="form-control" name="name" required />
                </div>
                <div class="form-group">
                    <label for="">Subtítulo</label>
                    <input type="text" class="form-control" name="description" required />
                </div>
                <div class="form-group">
                    <label for="">Descrição</label>
                    <textarea class="form-control" rows="4" name="content" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Valor</label>
                    <input type="text" class="form-control" name="price" required />
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" required />
                </div>
                <div class="form-group">
                    <label for="">Usuário</label>
                    <select class="form-control" name="store" required>
                        @foreach($stores as $store)
                            <option value="{{ $store->id }}">{{ $store->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4 form-group">
                    <button type="submit" class="btn btn-success btn-lg">Criar produto</button>
                </div>
            </form>                
        </div>
    </div>
@endsection