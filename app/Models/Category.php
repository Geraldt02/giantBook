<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function book_category(){
        return $this->hasMany(book_category::class);
    }

    protected $fillable = [
        'name'
    ];
}
