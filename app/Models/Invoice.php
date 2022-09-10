<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    // protected static function boot() {

    //     parent::boot();

    //     static::created(function ($InvoiceProduct) {
    //         $InvoiceProduct->update(['expired_at' => Carbon::now()->addDays(2)->toDateTimeString()]);
    //     });
    // }

    protected $table = 'invoices';
    protected $fillable = [
        'user_id',
        'product_id',
        'paymentmethods_id',
        'tagihan',
        'nama_rekening',
        'bukti_pembayaran',
        'status',
        'expired_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function produk()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function paymentmethod()
    {
        return $this->belongsTo(PaymentMethods::class, 'paymentmethods_id', 'id');
    }
}
