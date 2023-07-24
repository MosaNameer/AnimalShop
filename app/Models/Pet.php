<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
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
        "status"
    ];

    #RelationShips

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
