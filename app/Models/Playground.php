<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playground extends Model
{
    use HasFactory;

    protected $table = 'playground'; 

    public function playground()
    {
        return $this->belongsTo(Grade::class, 'class_id');
    }

}
