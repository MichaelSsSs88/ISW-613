<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingredient;

class IngredientCosts extends Model
{
    use HasFactory;
    protected $fillable = ['ingredient_id', 'cost', 'date'];

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }
}
