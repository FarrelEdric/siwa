<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\kk_pendudukModel;

class sosialisasiModel extends Model
{
    use HasFactory;

    protected $table = 'sosialisasi';

    protected $primaryKey = "id_sosialisasi";

    protected $fillable = [
        'id_sosialisasi',
        'nama_sosialisasi',
        'ket_sosialisasi'
    ];
}
