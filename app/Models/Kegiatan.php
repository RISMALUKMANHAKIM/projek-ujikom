<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $visible = ['kebutuhan_harian', 'kebutuhan_obat'];
    protected $fillable = ['kebutuhan_harian', 'kebutuhan_obat'];
    public $timestamps = true;

    public function image()
    {
        if ($this->gambar && file_exists(public_path('image/kegiatan/' . $this->gambar))) {
            return asset('image/kegiatan/' . $this->gambar);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('image/kegiatan/' . $this->gambar))) {
            return unlink(public_path('image/kegiatan/' . $this->gambar));
        }

    }
}
