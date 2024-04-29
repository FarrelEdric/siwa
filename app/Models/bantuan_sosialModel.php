<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class bantuan_sosialModel extends Model
{
    use HasFactory;

    protected $table ='bantuan_sosial';

    protected $primaryKey ="id_bantuan";

    protected $fillalble =[
        'no_kk',
        'jenis_bantuan',
        'tgl_bantuan'

    ];
    public function KartuKeluarga(): BelongsTo
    {
        return $this->belongsTo(kk_pendudukModel::class, 'no_kk');
    }
}

