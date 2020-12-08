<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProductPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPhotoController extends Controller
{
    public function removePhoto(Request $request)
    {
        $photoName = $request->get('photoName');

        // Remove do diretório
        if(Storage::disk('public')->exists($photoName)){
            Storage::disk('public')->delete($photoName);
        }

        $removePhoto = ProductPhoto::where('imagem', $photoName);
        $productId = $removePhoto->first()->product_id;

        $removePhoto->delete();

        flash("A imagem do produto de ID <strong>$productId</strong> foi removida com sucesso")->success();
        return redirect()->route('admin.products.edit', ['product' => $productId]);
    }
}