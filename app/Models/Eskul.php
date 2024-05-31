<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    public $fillable = ['eskul', 'deskripsi', 'foto'];
    public $visible = ['eskul', 'deskripsi', 'foto'];
    public $timestamp = true;
}
