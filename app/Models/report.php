<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;
    protected $table = 'report';
    
    public function report()
    {
        return $this->hasMany(report::class);
    }
}