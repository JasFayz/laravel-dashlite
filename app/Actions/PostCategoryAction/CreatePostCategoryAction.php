<?php

namespace App\Actions\PostCategoryAction;

use App\DTOs\PageDTO;
use App\DTOs\PostCategoryDTO;
use App\Models\Admin\Page;
use App\Models\Admin\PostCategory;

class CreatePostCategoryAction
{
    public function fromRequest(PostCategoryDTO $postCategoryDTO)
    {


        return PostCategory::create([
            'title' => json_encode($postCategoryDTO->title),
            'slug' => $postCategoryDTO->slug,
            'parent_id' => $postCategoryDTO->parent_id,
            'desc' => json_encode($postCategoryDTO->desc)
        ]);
    }
}
