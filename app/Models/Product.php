<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     use HasFactory;
    protected $fillable = ['name','photo','merk','price','stock','production_date'];
    public $timestamp = true;

    //untuk menghapus gambar ketika  diedit
    public function  deleteImage()
    {
        if($this->photo &&  file_exists(public_path('storage/product' . $this->photo))) {
            return unlink(public_path('storage/product' . $this->photo));
        } 

                                                                                                                                

    }
                                 
}

