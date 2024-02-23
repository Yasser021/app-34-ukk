<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class borrow extends Model
{
    use HasFactory;

    protected $table = 'borrows';
    protected $fillable = [
        'id_buku',
        'id_user',
        'status',
        'date_taken',
        'return_date',
        'quantity',
    ];

    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
