<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "age",
        "price",
        "gender",
        "category",
        "description",
        "breed",
        "color",
        "image",
        "category_id",
    ];

    #RelationShips

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
