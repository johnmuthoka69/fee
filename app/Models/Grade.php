<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    // protected $table = 'classes';
    public function fees()
    {
        return $this->hasMany(Fee::class, 'class_id');

    }

    public function grade12()
    {
        return $this->hasMany(grade12::class, 'class_id');
    }

    public function playground()
    {
        return $this->hasMany(grade12::class, 'class_id');
    }

}
