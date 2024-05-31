<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    public $fillable = ['nama_fasilitas', 'foto'];
    public $visible = ['nama_fasilitas', 'foto'];
    public $timestamp = true;
}
