<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souvenir extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'souvenirs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_acara',
        'nama',
        'harga',
        'deskripsi',
        'jenis',
        'gambar',
    ];
}
