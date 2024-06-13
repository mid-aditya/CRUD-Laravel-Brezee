<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dota extends Model
{
    protected $table = 'dota';
    protected $primaryKey = 'id_videos'; // Tentukan primary key
    protected $fillable = ['judul', 'gambar', 'link'];
    public $timestamps = false;
}
