<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'         ,
        'author_id'     ,
        'isbn'          ,
        'title'         ,
        'author'        ,
        'publisher'     ,
        'category'      ,
        'pages'         ,
        'language'      ,
        'publish_date'  ,
        'subjects'      ,
        'desc'
    ];
    use SoftDeletes;
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

