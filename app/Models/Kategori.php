<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
class Kategori extends Model
{
    use HasFactory, softDeletes;

    protected $table = "kategoris";
    protected $attributes = [
        'nama'=>'unknown',
    ];
    protected $fillable = [
        'nama',
    ];
}
