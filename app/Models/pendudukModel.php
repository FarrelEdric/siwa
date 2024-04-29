<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\kk_pendudukModel;

class pendudukModel extends Model
{
    use HasFactory;

    protected $table = 'penduduk_keluar';

    protected $primaryKey = "id_penduduk";

    protected $fillalble = [
        'no_kk',
        'nik_penduduk',
        'nama_penduduk',
        'kk_penduduk',
        'pekerjaan_penduduk',
        'status_penduduk',
        'tgl_lahir_penduduk',
        'no_tlp_penduduk'

    ];
    public function penduduk(): BelongsTo
    {
        return $this->belongsTo(kk_pendudukModel::class, 'no_kk');
    }
}
