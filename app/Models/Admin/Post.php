<?php

namespace App\Models\Admin;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory, \Spatie\Translatable\HasTranslations;

    protected $appends = ['titleLocale', 'contentLocale'];

    protected $fillable = ['title', 'content', 'slug', 'status', 'is_commentable', 'is_draft', 'published_at', 'category_id', 'drafter_owner_id'];

    public $translatable = ['title', 'content'];


    public function getTitleLocaleAttribute($key)
    {
        return $this->getTranslations('title');
    }

    public function getContentLocaleAttribute($key)
    {
        return $this->getTranslations('content');
    }
}
