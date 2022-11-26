<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    public function publisher()
    {
        return $this->belongsTo(publisher::class, 'publisher_id', 'id');
    }

    public function category()
    {
        return $this->hasMany(book_category::class, 'category_id', 'id');
    }
}
