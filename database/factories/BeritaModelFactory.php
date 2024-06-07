<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\kk_pendudukModel;

class beritaModel extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $primaryKey = "id_berita";

    protected $fillable = [
        'id_berita',
        'nama_berita',
        'waktu_pel_berita',
        'deskripsi',
        'gambar'
    ];
}