<?php

namespace App\Actions\PostCategoryAction;

use App\DTOs\PageDTO;
use App\DTOs\PostCategoryDTO;
use App\Models\Admin\Page;
use App\Models\Admin\PostCategory;

class EditPostCategoryAction
{

    public function fromRequest(PostCategoryDTO $postCategoryDTO, PostCategory $postCategory)
    {

        $postCategory->update([
            'title' => $postCategoryDTO->title,
            'slug' => $postCategoryDTO->slug,
            'parent_id' => $postCategoryDTO->parent_id,
            'desc' => $postCategoryDTO->desc
        ]);
        return $postCategory;
    }
}
