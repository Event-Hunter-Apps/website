<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function idrPrice(): Attribute {
        return new Attribute( get: function() {
            return number_format($this->total_harga, 0, ',', '.' );
        });
    }
}
