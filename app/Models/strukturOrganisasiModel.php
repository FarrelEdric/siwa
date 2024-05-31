<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class strukturOrganisasiModel extends Model
{
    use HasFactory;

    protected $table = 'struktur_organisasi';

    protected $primaryKey = "id_pengurus";

    protected $fillalble = [
        'id_pengurus',
        'nama_pengurus',
        'jabatan_pengurus'
    ];
    public function  user(): BelongsTo
    {
        return $this->belongsTo(userModel::class, 'id_user');
    }
}
