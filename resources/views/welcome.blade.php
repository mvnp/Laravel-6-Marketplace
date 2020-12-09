@extends('layouts.front')

@section('content')

<div class="row front">
    @foreach($products as $key => $product)
        <div class="col-12 col-md-4">
            <div class="card">
                @if(!$product->photos->count())
                    <img src="{{ asset('assets/images/no-photo.jpg') }}" alt="" class="card-img-top" />
                @else 
                    <img src="{{ asset('storage/' . $product->photos->first()->imagem) }}" alt="" class="card-img-top" />
                @endif
                <div class="card-body">
                    <h2 class="card-title">{{ $product->name }}</h2>
                    <p class="card-text">
                        {{ $product->description }}
                    </p>
                    <h4>R$ {{ number_format($product->price, 2, ',', '.') }}</h4>
                    <a href="{{ route('product.single', ['slug' => $product->slug]) }}" class="btn btn-block btn-success">VER DETALHES</a>
                </div>
            </div>
        </div>
        @if(($key + 1) % 3 == 0) </div><div class="row front">@endif
    @endforeach
</div>

@endsection