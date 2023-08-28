<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade1 extends Model
{
    use HasFactory;
    public function grade12()
    {
        return $this->belongsTo(Grade::class, 'class_id');
    }
}
