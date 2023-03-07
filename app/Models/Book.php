<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable=['ISBN', 'title', 'description', 'author', 'publication_year', 'cover_image', 'genre', 'publishing_house', 'language'];
    public function resellers()
    {
        return $this->belongsToMany(Reseller::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function isImageAUrl(){
        return filter_var($this->cover_image, FILTER_VALIDATE_URL);
    }
}
