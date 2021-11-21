<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uaetoursproduct extends Model
{
    use HasFactory;

    public function inclusion()
    {
        return $this->hasMany(inclusions::class);
    }
}
