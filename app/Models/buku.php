<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'publish_year',
        'stock',
        'cover',
        'desc',
        'id_kategori'
    ];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
    public function borrow()
    {
        return $this->hasMany(borrow::class, 'id_buku');
    }
}
