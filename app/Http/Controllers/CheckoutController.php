<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        ## Mata o servidor com CTRL + C
        ## php artisan config:clear
        ## php artisan cache:clear
        ## php artisan serve

        if(!auth()->check()){
            return redirect()->route('login');
        }

        $sessionCode = $this->makePagSeguroSession();

        dd($sessionCode);

        return view('checkout');
    }

    private function makePagSeguroSession()
    {
        $sessionCode = \PagSeguro\Services\Session::create(
            \PagSeguro\Configuration\Configure::getAccountCredentials()
        );

        return $sessionCode->getResult();
    }
}
