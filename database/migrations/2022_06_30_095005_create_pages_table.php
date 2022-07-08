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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->jsonb('title');
            $table->jsonb('content');
            $table->string('slug');
            $table->integer('category_id');
            $table->integer('drafter_owner_id');
            $table->boolean('status');
            $table->foreign('category_id')->references('id')->on('post_categories');
            $table->boolean('is_commentable');
            $table->boolean('is_draft')->default(false);
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
        Schema::dropIfExists('pages');
    }
};
