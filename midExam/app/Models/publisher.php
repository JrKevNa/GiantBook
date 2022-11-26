<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    use HasFactory;

    public function book()
    {
        //return $this->hasMany(book::class, "id", "publisher_id");
        return $this->hasMany(book::class, "publisher_id", "id");
    }
}
