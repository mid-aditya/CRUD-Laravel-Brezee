<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'id_videos'; // Tentukan primary key
    protected $fillable = ['judul', 'gambar', 'link'];
    public $timestamps = false;
}
