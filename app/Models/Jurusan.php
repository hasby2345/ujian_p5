<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    public $fillable = ['nama_jurusan'];
    public $visible = ['nama_jurusan'];
    public $timestamp = true;

    public function Industri()
    {
        return $this->hasOne(Industri::class, 'id_jurusan');
    }
}
