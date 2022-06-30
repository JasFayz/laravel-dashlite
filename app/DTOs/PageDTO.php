<?php

namespace App\DTOs;


use App\Http\Requests\Admin\CreatePageRequest;
use App\Http\Requests\Admin\UpdatePageRequest;
use Illuminate\Support\Str;

class PageDTO
{
    public function __construct(
        public array  $title,
        public array  $content,
        public string $slug,
        public bool   $status,
        public bool   $is_commentable
    )
    {
    }

    public static function fromCreateRequest(CreatePageRequest $request): self
    {
        return new self(
            title: $request->input('title'),
            content: $request->input('content'),
            slug: (string)Str::of($request->input('slug'))->trim(),
            status: $request->has('status'),
            is_commentable: $request->has('is_commentable')
        );
    }

    public static function fromUpdateRequest(UpdatePageRequest $request): self
    {
        return new self(
            title: $request->input('title'),
            content: $request->input('content'),
            slug: (string)Str::of($request->input('slug'))->trim(),
            status: $request->has('status'),
            is_commentable: $request->has('is_commentable')
        );
    }
}
