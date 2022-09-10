<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'slug',
        'foto'
    ];

    public function deskripsiProduct()
    {
        return $this->hasMany('App\Models\DeskripsiProduct', 'product_id', 'id');
    }

    public function layanan()
    {
        return $this->hasOne('App\Models\Layanan', 'product_id', 'id');
    }

    public function imageProduct()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function cart()
    {
        return $this->hasOne(Cart::class, 'product_id', 'id');
    }

    public function wishlist()
    {
        return $this->hasOne(Wishlist::class, 'product_id', 'id');
    }

}
