<?php

namespace App\Actions\PostAction;

use App\Actions\UploadFileAction;
use App\DTOs\PostDTO;
use App\Models\Admin\Post;

class CreatePostAction
{

    public function __construct(protected UploadFileAction $uploadFile)
    {
    }

    public function fromRequest(PostDTO $postDTO)
    {

        $image = $this->uploadFile->execute($postDTO->image, '/uploads');

        return Post::create([
            'title' => $postDTO->title,
            'content' => $postDTO->content,
            'slug' => $postDTO->slug,
            'category_id' => $postDTO->category_id,
            'status' => $postDTO->status,
            'published_at' => $postDTO->published_at,
            'is_commentable' => $postDTO->is_commentable,
            'is_draft' => false,
            'image' => $image
        ]);
    }
}
