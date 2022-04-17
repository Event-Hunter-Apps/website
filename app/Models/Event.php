<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Casts\Attribute;

class Event extends Model
{
    use HasFactory, softDeletes;
    protected $attributes = [
        'user_id'=>1,
        'nama'=>'anonymous',
        'deskripsi'=>'lorem ipsum',
        'tanggal_mulai'=>'01/02/2001',
        'tanggal_berakhir'=>'01/02/2001',
        'jam_buka'=>'12.00',
        'jam_tutup' => '12.00',
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

    public function scopeFilter($query, array $filters) {
        
       
        $query->when($filters['nama'] ?? false, function($query, $nama) {
            return $query->where('nama', 'like', '%'.$nama.'%');
        });

        $query->when($filters['kota'] ?? false, function($query, $kota) {
            if($kota == "all city") {
                $kota = "";
            }
            return $query->where('kota', 'like', '%'.$kota.'%');
        });
    }

    public function imageUrl(): Attribute {
        return new Attribute( get: function( $value ){
            $expiresAt = new \DateTime('tomorrow');
            $imageReference = app('firebase.storage')->getBucket()->object( $this->image);
    
            if ($imageReference->exists()) {
                $image = $imageReference->signedUrl($expiresAt);
            } else {
                $image = null;
            }
            return $image;
        });
    }

    public function idrPrice(): Attribute {
        return new Attribute( get: function() {
            return number_format($this->harga, 0, ',', '.' );
        });
    }
}
