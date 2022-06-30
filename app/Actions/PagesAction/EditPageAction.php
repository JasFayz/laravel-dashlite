<?php

namespace App\Actions\PagesAction;

use App\DTOs\PageDTO;
use App\Http\Requests\Admin\UpdatePageRequest;
use App\Models\Admin\Page;

class EditPageAction
{

    public function fromRequest(PageDTO $pageDTO, Page $page)
    {
        $page->update([
            'title' => json_encode($pageDTO->title),
            'content' => json_encode($pageDTO->content),
            'slug' => $pageDTO->slug,
            'status' => $pageDTO->status,
        ]);
        return $page;
    }
}
