<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'transaksis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'total',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
