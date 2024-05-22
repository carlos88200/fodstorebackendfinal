<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'Quantity',
        'IdUserFK',
        'IdFoodFK'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'IdUserFK');
    }

    public function food()
    {
        return $this->belongsTo(Food::class, 'IdFoodFK');
    }
}
