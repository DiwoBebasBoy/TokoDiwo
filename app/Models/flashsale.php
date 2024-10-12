<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashSale extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'start_time', 'end_time'];

    // Relasi dengan produk
    public function product()
    {
        return $this->belongsToMany(Product::class, 'flash_sale_product')
            ->withPivot('discount_price')
            ->withTimestamps();
    }
    public function show($id)
    {
        $product = Product::with('flashSales')->findOrFail($id); // Ambil produk beserta flash sale terkait
        return view('pages.admin.product.show', compact('product'));
    }
    
}