<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethods extends Model
{
    use HasFactory;

    protected $fillable = [
        'method_name',
        'provider_name',
        'nama_rekening',
        'nomor_rekening'
    ];

    // public function invoice()
    // {
    //     return $this->hasOne(Invoice::class, 'id', 'paymentmethods_id');
    // }
}
