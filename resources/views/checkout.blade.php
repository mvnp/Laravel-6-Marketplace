@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="col-12 form-group">
                        <h2>
                            Dados de Pagamento<hr>
                        </h2>
                        <label for="">Número do cartão</label>
                        <input type="text" name="card_number" class="form-control" />
                        <div class="row mt-3">
                            <div class="col-4">
                                <label for="">Mês expiração</label>
                                <input type="number" name="card_month" class="form-control" min="2" max="2" />
                            </div>
                            <div class="col-4">
                                <label for="">Ano expiração</label>
                                <input type="number" name="card_year" class="form-control" min="4" max="4" />
                            </div>
                            <div class="col-4">
                                <label for="">CVV</label>
                                <input type="number" name="card_cvv" class="form-control" />
                            </div>
                        </div>
                        <button class="btn btn-block  btn-success btn-lg mt-3">Efetuar Pagamento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection