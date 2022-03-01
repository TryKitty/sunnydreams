<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'image','catalog_id','namaproduk','harga','stok'
    ];
    
    public function catalog() {
        return $this->belongsTo(catalogModel::class);
    }
}
