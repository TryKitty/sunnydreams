<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navbarModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'item','itemlink','logo','logolink','btnnvbr','btnlink','icon','iconlink'
    ];
}
