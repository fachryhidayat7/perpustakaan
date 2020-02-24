<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{   
    //untuk mengambil keseluruhan data dari tabel book
    protected $guarded = [];

    //relasi dari model author
    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function getCover()
    {
        //Kondisi jika link nya https akan mereturn link asli, sedangkan jika tidak maka akan mereturn asset + link
        if(substr($this->cover, 0.5) == "https"){
            return $this->cover;
        }

        if ($this->cover){
            return asset($this->cover);
        }

        //Jika gamnar tidak diupload maka akan menampilkan gambar default
        return 'https://via.placeholder.com/150x200.png?text=NoCover';
    }
}
