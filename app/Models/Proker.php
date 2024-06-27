<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    use HasFactory;

    protected $table = 'prokers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_proker',
        'tanggal',
        'tempat',
        'email',
        'penyelenggara',
        'deskripsi',
    ];
}
