<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    //relasi dari model Book
    public function books(){
        return $this->hasMany(Book::class);
    }
}
