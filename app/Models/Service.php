<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'description_zh',
        'icon',
        'content',
        'content_zh',
        'image',
        'order',
        'is_active'
    ];
    
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
}
