<?php

namespace App\Http\Controllers\Api;

use App\Actions\PostAction\CreatePostAction;
use App\Actions\PostAction\EditPostAction;
use App\DTOs\PostDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\CreatePostRequest;
use App\Http\Requests\Admin\Post\UpdatePostRequest;
use App\Models\Admin\Post;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::query()->paginate();
        return response()->json([
            'status' => 'success',
            'data' => $posts
        ]);
    }


    public function store(CreatePostRequest $request, CreatePostAction $createPostAction)
    {
        try {
            $post = $createPostAction->fromRequest(PostDTO::fromCreateRequest($request));
            return response()->json(['data' => $post, 'status' => 'success']);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'code' => $exception->getCode()
            ]);
        }
    }


    public function show(Post $post)
    {
        return response()->json([
            'status' => 'success',
            'data' => $post,
        ]);
    }


    public function update(UpdatePostRequest $request, Post $post, EditPostAction $editPostAction)
    {
        try {
            $post = $editPostAction->fromRequest(PostDTO::fromUpdateRequest($request), $post);
            return response()->json([
                "status" => "success",
                "data" => $post
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'code' => $exception->getCode()
            ]);
        }
    }


    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return response()->json([
                'status' => 'success',
            ], 403);
        } catch (\Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage(),
                'code' => $exception->getCode()
            ]);
        }
    }
}
