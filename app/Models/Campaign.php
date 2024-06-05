<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'campaign_products', 'campaign_id', 'product_id');
    }
    // public function getFinalPrice()
    // {
    //     $totalDiscount = null;

    //     // Calculate discount based on special price type
    //     if ($this->sp_type == 'Percent') {
    //         $totalDiscount = $this->price - ($this->price * $this->s_price / 100);
    //     } elseif ($this->sp_type == 'Fixed') {
    //         $totalDiscount = $this->price - $this->s_price;
    //     }
    //     return $totalDiscount;
    // }
}