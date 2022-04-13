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
        'jam_buka'=>'12.00 AM',
        'jam_tutup' => '12.PM',
        'lokasi'=>'unknown',
        'harga'=>0,
        'image'=>'-'
    ];
    protected $fillable = [
        'user_id',
        'nama',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_berakhir',
        'jam_buka',
        'jam_tutup',
        'lokasi',
        'harga',
        'kota',
        'image',
    ];
}
