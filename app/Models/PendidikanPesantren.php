<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanPesantren extends Model
{
    use HasFactory;
    protected $table = 'pendidikan_pesantren';
    protected $fillable = [
        'user_id',
        'pendidikan_id'
    ];
}
