<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class levelModel extends Model
{
    use HasFactory;
    protected $table = 'level';

    protected $primaryKey = "level_id";

    protected $fillalble = [
        'level_nama'
    ];
}
