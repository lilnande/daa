<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'price',
        'stock',
        'description',
    ];
    public function transactions()
{
    return $this->hasMany(Transaction::class);
}

public function stock()
{
    return $this->hasOne(Stock::class);
}

}
