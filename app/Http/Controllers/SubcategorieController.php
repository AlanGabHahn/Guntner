<?php

namespace App\Http\Controllers;

use App\Models\Subcategorie;
use Illuminate\Http\Request;

class SubcategorieController extends Controller
{
    public function show($subcategorie_id){
        $product = Subcategorie::find($subcategorie_id)->product->all();
        return view('product')->with([
            'product' => $product,
            'subCategorieName' => Subcategorie::find($subcategorie_id)->name,
            'categorieName' => Subcategorie::find($subcategorie_id)->categorie->name
        ]);
    }
}
