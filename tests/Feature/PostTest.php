<?php

namespace Tests\Feature;

use App\Models\Admin\Post;
use App\Models\Admin\PostCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_post()
    {
        $postModel = Post::factory()->create();
        $post = $postModel->toArray();
        $post['title'] = $post['titleLocale'];
        $post['content'] = $post['contentLocale'];

        $response = $this->postJson(route('posts.store'), $post);

        $response->assertCreated();

        $response->assertJson(['data' => ['slug' => $post['slug']]]);

        $this->assertDatabaseHas('posts', $postModel->toArray());
    }

    public function test_edit_post()
    {
        $postCreate = Post::factory()->create();
        $category = PostCategory::factory()->create();
        $user = User::factory()->create();
        $newValue = [
            'id' => 1,
            'title' => [
                'ru' => "Ru " . "TESTING",
                'en' => "En " . "TESTING",
                'uz' => "Uz " . "TESTING",
            ],
            'content' => [
                'ru' => "Ru " . "TESTING",
                'en' => "En " . "TESTING",
                'uz' => "Uz " . "TESTING",
            ],
            'slug' => '"TESTING"',
            'category_id' => $category->id,
            'published_at' => now(),
            "status" => true,
            "is_commentable" => false,
            "is_draft" => false,
            "drafter_owner_id" => $user->id
        ];

        $postCreate->update($newValue);

        $postUpdatedValue = Post::first();

        $this->assertEquals($postUpdatedValue->title, $newValue['title'][$this->app->getLocale()]);
        $this->assertEquals($postUpdatedValue->content, $newValue['content'][$this->app->getLocale()]);
        $this->assertEquals($postUpdatedValue->slug, $newValue['slug']);
        $this->assertEquals($postUpdatedValue->category_id, $newValue['category_id']);
        $this->assertEquals($postUpdatedValue->status, $newValue['status']);
        $this->assertEquals($postUpdatedValue->is_commentable, $newValue['is_commentable']);
        $this->assertEquals($postUpdatedValue->is_draft, $newValue['is_draft']);
        $this->assertEquals($postUpdatedValue->drafter_owner_id, $newValue['drafter_owner_id']);
    }

    public function test_delete_post()
    {
        $post = Post::factory()->create();

        $this->deleteJson(
            route('posts.destroy', $post)
        )->assertNoContent();

    }
}
