<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    use HasFactory;

    public $fillable = ['nama_industri', 'alamat', 'thn_kerja', 'id_jurusan'];
    public $visible = ['nama_industri', 'alamat', 'thn_kerja', 'id_jurusan'];
    public $timestamp = true;

    public function Jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
}
