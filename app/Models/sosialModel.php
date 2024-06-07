<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\kk_pendudukModel;

class sosialModel extends Model
{
    use HasFactory;

    protected $table = 'sosial';

    protected $primaryKey = "id_sosial";

    protected $fillable = [
        'id_sosial',
        'nama_sosial',
        'deskripsi',
        'gambar'
    ];
}
