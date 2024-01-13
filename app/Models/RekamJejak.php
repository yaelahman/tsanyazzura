<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamJejak extends Model
{
    use HasFactory;
    protected $table = 'rekam_jejak';
    public $incrementing = true;
    public $timestamps = true;
}
