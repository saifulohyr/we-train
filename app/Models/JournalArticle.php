<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalArticle extends Model
{
    protected $fillable = [
        'title',
        'title_zh',
        'abstract',
        'abstract_zh',
        'author',
        'published_at',
        'pdf_url',
        'doi',
        'is_featured'
    ];
    
    protected $casts = [
        'published_at' => 'date',
        'is_featured' => 'boolean',
    ];
}
