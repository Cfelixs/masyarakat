<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Model
{
    use HasFactory;

    protected $table ='masyarakat';

    protected $primarykey ='nik';

    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp',
    ];
}
