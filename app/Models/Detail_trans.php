<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_trans extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'detail_trans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_item',
        'id_transaksi',
        'jumlah',
        'subtotal',
    ];

    public function item()
    {
        return $this->belongsTo('App\Models\Souvenir', 'id_item');
    }

    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi', 'id_transaksi');
    }
}
