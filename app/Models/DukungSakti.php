<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DukungSakti extends Model
{
    use HasFactory;
    protected $table = 'dukung_sakti';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'whatsapp',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'wilayah',
        'tim_sukses',
        'koordinator',
        'tps'
    ];
}
