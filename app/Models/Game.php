<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    protected $primaryKey = 'id_videos'; // Tentukan primary key
    protected $fillable = ['judul', 'gambar', 'link'];
    public $timestamps = false;
}
