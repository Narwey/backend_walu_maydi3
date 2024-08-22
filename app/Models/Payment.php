<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function Customer() {
        return $this->belongsTo(Customer::class);
    }

    public function Product() {
        return $this->belongsTo(Product::class);
    }
}
