<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class suratModel extends Model
{
    use HasFactory;

    protected $table = 'surat';

    protected $primaryKey = "id_surat";

    protected $fillalble = [
        'id_penduduk',
        'tgl_surat',
        'tujuan'

     

    ];
    public function penduduk(): BelongsTo
    {
        return $this->belongsTo(pendudukModel::class, 'id_penduduk');
    }
}
