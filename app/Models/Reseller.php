<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseller extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'indirizzo'];

    //Relationship method
    public function books(){
        return $this->belongsToMany(Book::class);
    }
}
