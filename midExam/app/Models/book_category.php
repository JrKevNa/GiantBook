<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_category extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(book::class, 'book_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
