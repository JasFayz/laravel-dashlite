<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->jsonb('title');
            $table->jsonb('content');
            $table->string('slug');
            $table->integer('category_id');
            $table->integer('drafter_owner_id')->nullable();
//            $table->foreignId('category_id')
//                ->constrained('post_categories', 'id');
            $table->foreign('category_id')->references('id')->on('post_categories');
            $table->timestamp('published_at');
            $table->boolean('status');
            $table->boolean('is_commentable');
            $table->boolean('is_draft');
//            $table->foreignId('drafter_owner_id')
//                ->nullable()->constrained('users', 'id');
            $table->foreign('drafter_owner_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
