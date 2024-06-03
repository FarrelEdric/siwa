<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\keuanganModel;

class kk_pendudukModel extends Model
{
    use HasFactory;
    protected $table = 'kk_penduduk';

    protected $primaryKey = "no_kk";

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'no_kk',
        'nkk',
        'id_keuangan',
        'kepala_keluarga',
        'alamat',
        'rt',
        'rw',
        'kode_pos',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi'

    ];

    public $timestamps = false;

    public function  keuangan(): BelongsTo
    {
        return $this->belongsTo(keuanganModel::class, 'keuangan');
    }
}
