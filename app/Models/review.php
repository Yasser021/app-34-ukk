<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = [
        'id_buku',
        'id_user',
        'review',
        'rating',
    ];

    public function buku() {
        return $this->belongsTo(buku::class, 'id_buku');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

}
