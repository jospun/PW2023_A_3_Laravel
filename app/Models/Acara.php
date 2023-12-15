<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'acaras';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_acara',
        'tanggal_mulai',
        'tanggal_tutup',
        'biaya',
    ];
}
