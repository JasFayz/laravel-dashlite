<?php

namespace App\Models\Admin;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PostCategory extends Model
{
    use HasFactory, HasTranslations;

    protected $appends = ['titleLocale', 'descLocale'];

    protected $fillable = ['title', 'slug', 'parent_id', 'desc'];

    public $translatable = ['title', 'desc'];

    public function getTitleLocaleAttribute($key)
    {
        return $this->getTranslations('title');
    }

    public function getDescLocaleAttribute($key)
    {
        return $this->getTranslations('title');
    }

    public function parent()
    {
        return $this->hasOne(PostCategory::class, 'id', 'parent_id');
    }
}
