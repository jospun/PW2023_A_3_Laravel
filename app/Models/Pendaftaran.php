<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'pendaftarans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'id_acara',
        'status',
        'tanggal_bayar',
        'jumlah',
        'subTotal',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function acara()
    {
        return $this->belongsTo('App\Models\Acara', 'id_acara');
    }
}
