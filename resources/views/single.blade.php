@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-5">
            @if(!$product->photos->count())
                <img src="{{ asset('assets/images/no-photo.jpg') }}" alt="" class="card-img-top" />
            @else 
                <img src="{{ asset('storage/' . $product->photos->first()->imagem) }}" alt="" class="card-img-top topi" />
            @endif
            <div class="row mt-3">
                @if($product->photos->count())
                    @foreach($product->photos as $photo)
                        <div class="col-3">
                            <img src="{{ asset('storage/' . $photo->imagem) }}" alt="" class="card-img-top" />  
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-7">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <h3><strong>R$ {{ number_format($product->price, 2, ',', '.') }}</strong></h3>
            <span>Loja: {{ $product->store->name }}</span>
            <div class="row">
                <div class="col-4">
                    <form action="{{ route('cart.add') }}" method="POST" style="margin-top: 15px">
                        <div class="input-group">
                            @csrf
                            <input type="hidden" name="product[name]" value="{{ $product->name }}" />
                            <input type="hidden" name="product[price]" value="{{ $product->price }}" />
                            <input type="hidden" name="product[slug]" value="{{ $product->slug }}" />
                            <input type="number" name="product[amount]" value="1" min="1" class="form-control" />
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary btn-danger">Comprar</button>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
    <hr><div class="row">
        <div class="col-12">
            {{ $product->content }}
        </div>
    </div>
@endsection