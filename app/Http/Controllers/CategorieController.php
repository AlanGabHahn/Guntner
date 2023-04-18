<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    private Categorie $categorie;

    public function __construct()
    {
        $this->categorie = new Categorie();
    }

    public function index(){
        return view('categories')->with(['categories' => $this->categorie->all()]);
    }

    public function show($categorie_id){
        $subcategories = $this->categorie->find($categorie_id)->subcategorie->all();
        return view('subcategories')->with(['subcategories' => $subcategories, 'categorieName' => $this->categorie->find($categorie_id)->name]);
    }
}
