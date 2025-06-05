<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('Name')->comment('user name')->max(30)->change();
        });

        Schema::table('roles', function(Blueprint $table){
            $table->string('role_name')->comment('A - Admin, C - Contributor, S - Subscriber)')->max(1)->change();
        });

        Schema::table('posts', function(Blueprint $table){
            $table->text('content')->comment('Content of a post.')->change();
            $table->text('status')->comment('D - Draft, P - Published, I - Inactive.')->max(1)->change();
            $table->text('featured_image_url')->comment('feature image of url.')->change();
        });

        Schema::table('categories', function(Blueprint $table){
            $table->string('category_name')->comment('News, Review, Podcast, Opinion, Lifestyle, etc.')->max(30)->change();
        });

        Schema::table('tags', function(Blueprint $table){
            $table->string('tag_name')->comment('Name of a tag.')->max(45)->change();
        });

        Schema::table('comments', function(Blueprint $table){
            $table->text('comment_content')->comment('Comment of a content.')->change();
            $table->string('reviewer_name')->comment('Name of a reviewer.')->nullable()->change();
            $table->string('reviewer_email')->comment('Email of a reviewer.')->nullable()->change();
        });

        Schema::table('media', function(Blueprint $table){
            $table->string('file_type')->comment('File type of a media.')->max(10)->change();
            $table->integer('file_size')->comment('File size of a media.')->default(0)->change();
            $table->string('description')->comment('Description of a media.')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('Name')->comment('user name')->change();
        });

        Schema::table('roles', function(Blueprint $table){
            $table->string('role_name')->comment('A - Admin, C - Contributor, S - Subscriber)')->change();
        });

        Schema::table('posts', function(Blueprint $table){
            $table->text('content')->comment('Content of a post.')->change();
            $table->text('status')->comment('D - Draft, P - Published, I - Inactive.')->change();
            $table->string('featured_image_url')->comment('feature image of url.')->change();
        });

        Schema::table('categories', function(Blueprint $table){
            $table->string('category_name')->comment('News, Review, Podcast, Opinion, Lifestyle, etc.')->change();
        });

        Schema::table('tags', function(Blueprint $table){
            $table->string('tag_name')->comment('Name of a tag.')->change();
        });

        Schema::table('comments', function(Blueprint $table){
            $table->text('comment_content')->comment('Comment of a content.')->change();
            $table->string('reviewer_name')->comment('Name of a reviewer.')->change();
            $table->string('reviewer_email')->comment('Email of a reviewer.')->change();
        });

        Schema::table('media', function(Blueprint $table){
            $table->string('file_type')->comment('File type of a media.')->change();
            $table->integer('file_size')->comment('File size of a media.')->change();
            $table->string('description')->comment('Description of a media.')->change();
        });
    }
};
