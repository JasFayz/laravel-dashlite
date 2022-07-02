<?php

namespace App\Http\Controllers\Api;

use App\Actions\PagesAction\CreatePostCategoryAction;
use App\Actions\PagesAction\EditPageAction;
use App\DTOs\PageDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\CreatePageRequest;
use App\Http\Requests\Admin\Page\UpdatePageRequest;
use App\Models\Admin\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::query()->paginate();

        return response()->json([
            'data' => $pages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePageRequest $request, CreatePostCategoryAction $createPageAction)
    {
        try {
            $page = $createPageAction->fromRequest(PageDTO::fromCreateRequest($request));
            return response()->json([
                'data' => $page
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'errorCode' => $exception->getCode()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Admin\Page $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return $page;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Admin\Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page, EditPageAction $editPageAction)
    {
        try {
            $page = $editPageAction->fromRequest(PageDTO::fromUpdateRequest($request), $page);
            return response()->json([
                'data' => $page
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'code' => $exception->getCode()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Admin\Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        try {
            $page->delete();
            return response()->json([], '204');
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'code' => $exception->getCode()
            ]);
        }
    }
}
