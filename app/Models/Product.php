<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Currency()
    {
        return $this->belongsTo(Currency::class);
    }
    public function Area()
    {
        return $this->belongsTo(Area::class);
    }
    public function Owner()
    {
        return $this->belongsTo(Owner::class);
    }
    // public function Invoices()
    // {
    //     return $this->belongsToMany(Invoice::class);
    // }
    public function Orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
