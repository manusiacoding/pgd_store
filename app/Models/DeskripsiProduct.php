<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskripsiProduct extends Model
{
    use HasFactory;
    protected $table = 'deskripsi_product';
    protected $fillable = [
        'product_id',
        'nama'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
