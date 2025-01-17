<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Food extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'Name',
        'Description',
        'Price',
        'idFoodGroupFK',
        'Image'

    ];

    public function Foods(): BelongsTo
    {
        return $this->belongsTo(FoodGroup::class,'idFoodGroupFK', 'id');
    }

    use HasFactory;
}
