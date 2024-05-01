<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use app\Models\pendudukModel;
use Illuminate\Foundation\Auth\User as Authenticatable;

class userModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'user';

    protected $primaryKey = "id_user";

    protected $fillable = [
        'id_penduduk',
        'level_id',
        'nama_user',
        'username',
        'password'



    ];
    public function penduduk(): BelongsTo
    {
        return $this->belongsTo(pendudukModel::class, 'id_penduduk');
    }
    public function level(): BelongsTo
    {
        return $this->belongsTo(levelModel::class, 'level_id');
    }
}
