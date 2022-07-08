<?php

namespace App\DTOs;


use App\Http\Requests\Admin\PostCategory\CreatePostCategoryRequest;
use App\Http\Requests\Admin\PostCategory\UpdatePostCategoryRequest;
use Illuminate\Support\Str;

class PostCategoryDTO
{
    public function __construct(
        public array  $title,
        public string $slug,
        public int    $parent_id,
        public array $desc
    )
    {
    }

    public static function fromCreateRequest(CreatePostCategoryRequest $request): self
    {

        return new self(
            title: $request->input('title'),
            slug: $request->input('slug'),
            parent_id: $request->input('parent_id'),
            desc: $request->input('desc')
        );
    }

    public static function fromUpdateRequest(UpdatePostCategoryRequest $request): self
    {
        return new self(
            title: $request->input('title'),
            slug: $request->input('slug'),
            parent_id: $request->input('parent_id'),
            desc: $request->input('desc')
        );
    }
}
