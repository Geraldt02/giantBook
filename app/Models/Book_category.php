<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_category extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo(Book::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $fillable = [
        'book_id',
        'category_id'
    ];
}
