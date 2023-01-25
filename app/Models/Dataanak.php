<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataanak extends Model
{
    use HasFactory;

    protected $visible = ['nama', 'umur', 'ttl', 'pendidikan', 'wali'];
    protected $fillable = ['nama', 'umur', 'ttl', 'pendidikan', 'wali'];
    public $timestamps = true;

}
