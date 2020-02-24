<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{   
    //relasi dari model author
    public function author(){
        return $this->belongsTo(Author::class);
    }
}
