<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Event extends Model
{
    use HasFactory, softDeletes;
    protected $attributes = [
        'user_id'=>1,
        'nama'=>'anonymous',
        'deskripsi'=>'lorem ipsum',
        'tanggal_mulai'=>'01/02/2001',
        'tanggal_berakhir'=>'01/02/2001',
        'waktu_event'=>'17.00 WIB',
        'lokasi'=>'unknown',
    ];
    protected $fillable = [
        'user_id',
        'nama',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_berakhir',
        'waktu_event',
        'lokasi',
    ];
}
