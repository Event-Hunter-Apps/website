<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Casts\Attribute;

class Tiket extends Model
{
    use HasFactory, softDeletes;
    protected $table = "tikets";
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

    public function idrPrice(): Attribute {
        return new Attribute( get: function() {
            return number_format($this->harga, 0, ',', '.' );
        });
    }
}