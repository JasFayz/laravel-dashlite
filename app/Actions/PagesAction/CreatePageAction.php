<?php

namespace App\Actions\PagesAction;

use App\DTOs\PageDTO;
use App\Models\Admin\Page;

class CreatePageAction
{
    public function fromRequest(PageDTO $pageDTO)
    {

        return Page::create([
            'title' => json_encode($pageDTO->title),
            'content' => json_encode($pageDTO->content),
            'slug' => $pageDTO->slug,
            'status' => $pageDTO->status,
            'is_commentable' => $pageDTO->is_commentable,
            'is_draft' => false
        ]);
    }
}
