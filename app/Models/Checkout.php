<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "tanggal_checkout",
        "status",
        "total_harga",
        "paid_at"
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
