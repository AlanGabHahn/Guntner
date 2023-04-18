<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategorie extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable = ['name'];

    public function Product(): HasMany
    {
        return $this->hasMany(Product::class, 'sub_categories_id');
    }

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categories_id');
    }
}
