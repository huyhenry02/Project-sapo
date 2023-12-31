<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function attribute_value()
    {
        return $this->belongsTo(Attribute_value::class);
    }
    public function order_details()
    {
        return $this->hasMany(Order_detail::class);
    }

}
