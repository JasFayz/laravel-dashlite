<?php

namespace App\Http\Controllers\Api;

use App\Actions\PostCategoryAction\CreatePostAction;
use App\Actions\PostCategoryAction\CreatePostCategoryAction;
use App\Actions\PostCategoryAction\EditPostAction;
use App\Actions\PostCategoryAction\EditPostCategoryAction;
use App\DTOs\PostCategoryDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostCategory\CreatePostCategoryRequest;
use App\Http\Requests\Admin\PostCategory\UpdatePostCategoryRequest;
use App\Models\Admin\PostCategory;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostCategoryController extends Controller
{

    public function index()
    {
        $posts = PostCategory::query()->paginate();

        return response()->json([
            'data' => $posts,
        ]);
    }


    public function store(CreatePostCategoryRequest $request, CreatePostCategoryAction $createPostCategoryAction)
    {
        try {
            $postCategory = $createPostCategoryAction->fromRequest(PostCategoryDTO::fromCreateRequest($request));
            return response()->json([
                'status' => 'success',
                'data' => $postCategory
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage(),
                'code' => $exception->getCode()
            ], 400);
        }
    }


    public function show(PostCategory $category)
    {
        try {
            return $category;
        } catch (NotFoundHttpException $exception) {
            throw new NotFoundHttpException('Entity does not exist',);
        }
    }


    public function update(UpdatePostCategoryRequest $request, PostCategory $postCategory, EditPostCategoryAction $editPostCategoryAction)
    {
        try {
            $postCategory = $editPostCategoryAction->fromRequest(PostCategoryDTO::fromUpdateRequest($request), $postCategory);
            return response()->json([
                'data' => $postCategory,
            ], 403);
        } catch (\Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage(),
                'code' => $exception->getCode()
            ], 400);
        }
    }


    public function destroy(PostCategory $category)
    {
        try {
            if ($category) {
                $category->delete();
                return response()->json([
                    'status' => 'success'
                ]);
            };
            return response()->json([
                'status' => 'error',
                'message' => 'Entity does not exist'
            ]);

        } catch (\Exception $excepton) {
            return response()->json([
                'message' => $excepton->getMessage(),
                'code' => $excepton->getCode(),
                'status' => 'error'
            ]);
        }
    }
}
