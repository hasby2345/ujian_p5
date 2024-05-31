<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'deskripsi', 'tgl', 'foto'];
    public $visible = ['judul', 'deskripsi', 'tgl', 'foto'];
    public $timestamp = true;
}
