<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    protected $primaryKey = 'id_fasilitas';

    protected $fillable = [
        'nama_fasilitas', 'keterangan'
    ];

    public function detailFasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'id_fasilitas');
    }
}

