<?php

namespace App\Actions\PostAction;

use App\DTOs\PostDTO;
use App\Models\Admin\Post;


class EditPostAction
{

    public function fromRequest(PostDTO $postDTO, Post $post)
    {
        $post->update([
            'title' => json_encode($postDTO->title),
            'content' => json_encode($postDTO->content),
            'slug' => $postDTO->slug,
            'category_id' => $postDTO->category_id,
            'status' => $postDTO->status,
            'published_at' => $postDTO->published_at,
            'is_commentable' => $postDTO->is_commentable,
            'is_draft' => false
        ]);
        return $post;
    }
}
