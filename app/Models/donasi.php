<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    public function image()
    {
        if ($this->bukti && file_exists(public_path('image/donasi/' . $this->bukti))) {
            return asset('image/donasi/' . $this->bukti);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->bukti && file_exists(public_path('image/donasi/' . $this->bukti))) {
            return unlink(public_path('image/donasi/' . $this->bukti));
        }

    }
}
