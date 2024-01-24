<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    
    protected $primaryKey = 'kode_kategoris';

    protected $fillable = [
        'kode_kategoris',
        'nama',
        'ket',
    ];
}
