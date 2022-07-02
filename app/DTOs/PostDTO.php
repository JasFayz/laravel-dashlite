<?php

namespace App\DTOs;


use App\Http\Requests\Admin\Page\CreatePageRequest;
use App\Http\Requests\Admin\Page\UpdatePageRequest;
use App\Http\Requests\Admin\Post\CreatePostRequest;
use App\Http\Requests\Admin\Post\UpdatePostRequest;
use Carbon\Carbon;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;

class PostDTO
{
    public function __construct(
        public array  $title,
        public array  $content,
        public string $slug,
        public int    $category_id,
        public Carbon $published_at,
        public bool   $status,
        public bool   $is_commentable
    )
    {
    }

    public static function fromCreateRequest(CreatePostRequest $request): self
    {
        return new self(
            title: $request->input('title'),
            content: $request->input('content'),
            slug: (string)Str::of($request->input('slug'))->trim(),
            category_id: (int)$request->input('category_id'),
            published_at: new Carbon($request->input('published_at')),
            status: $request->has('status'),
            is_commentable: $request->has('is_commentable')
        );
    }

    public static function fromUpdateRequest(UpdatePostRequest $request): self
    {
        return new self(
            title: $request->input('title'),
            content: $request->input('content'),
            slug: (string)Str::of($request->input('slug'))->trim(),
            category_id: (int)$request->input('category_id'),
            published_at: new Carbon($request->input('published_at')),
            status: $request->has('status'),
            is_commentable: $request->has('is_commentable')
        );
    }
}
