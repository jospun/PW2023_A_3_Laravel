<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gueststar extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'gueststars';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_acara',
        'nama',
        'deskripsi',
        'foto',
    ];

    public function acara()
    {
        return $this->belongsTo('App\Models\Acara', 'id_acara');
    }
}
