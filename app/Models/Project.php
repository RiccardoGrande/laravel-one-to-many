<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'url_project', 'slug', 'category_id'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
