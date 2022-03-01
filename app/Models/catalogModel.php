<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogModel extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function shop(){
        return $this->hasMany(shopModel::class);
    }
    
}
