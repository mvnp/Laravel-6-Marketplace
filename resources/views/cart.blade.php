@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Carrinho de Compras</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if($cart)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Produto</td>
                            <td>Preço</td>
                            <td>Quantidade</td>
                            <td>Subtotal</td>
                            <td>Ação</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp

                        @foreach($cart as $c)
                        <tr>
                            <td>{{ $c['name'] }}</td>
                            <td>R$ {{ number_format($c['price'], 2, ',', '.') }}</td>
                            <td>{{ $c['amount'] }}</td>
                            @php 
                                $subtotal = ($c['price'] * $c['amount']); 
                                $total += $subtotal;
                            @endphp
                            <td>R$ {{ number_format(($c['price'] * $c['amount']), 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('cart.remove', ['slug' => $c['slug']]) }}" class="btn btn-block btn-sm btn-danger">REMVOER</a>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Total </td>
                            <td colspan="2"><strong>R$ {{ number_format($total, 2, ',', '.') }}</strong></td>
                        </tr>
                    </tbody>
                </table>
                <hr><div class="row">
                    <div class="col-12">
                        <a href="{{ route('checkout.index') }}" class="btn btn-lg btn-success float-right">Finalizar Pedido</a>
                        <a onclick="return confirm('Deseja realmente remover tudo do seu carrinho?');" href="{{ route('cart.cancel') }}" class="btn btn-lg btn-danger float-left">Cancelar Pedido</a>
                    </div>
                </div>
            @else 
                <hr><p class="alert alert-warning">Carrinho de compras vazio. Voltar para <a href="{{ route('home') }}"><strong>loja</strong></a></p>
            @endif 
        </div>
    </div>
@endsection