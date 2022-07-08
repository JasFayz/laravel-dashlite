<?php

namespace Tests\Feature;

use App\Models\Admin\PostCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostCategoryTest extends TestCase
{
    use RefreshDatabase;


    public function test_post_category_create()
    {
        $this->assertEquals(0, PostCategory::count());
        $postCategory = PostCategory::factory()->create();

        $this->postJson(route('category.store'), $postCategory->toArray());

    }
}
