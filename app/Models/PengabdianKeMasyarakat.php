<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengabdianKeMasyarakat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'judul',
        'author',
        'tahun',
        'thumbnail',
        'teks',
        'slug',
        'release_date'
    ];
}
