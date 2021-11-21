<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inclusions extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Uaetoursproduct::class, 'uaeproduct_id');
    }
    // wait now add other table then we have to get relation data ok
}
