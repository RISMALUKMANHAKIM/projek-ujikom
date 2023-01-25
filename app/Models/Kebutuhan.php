<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebutuhan extends Model
{
    use HasFactory;

    protected $visible = ['judul', 'isi', 'gambar'];
    protected $fillable = ['judul', 'isi', 'gambar'];
    public $timestamps = true;
}
