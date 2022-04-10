<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Tiket extends Model
{
    use HasFactory, softDeletes;
    protected $attributes = [
        'deskripsi'=>'lorem ipsum',
        'harga'=>200000,
    ];
    protected $fillable = [
        'event_id',
        'kategori_id',
        'nama',
        'deskripsi',
        'harga',
    ];
}