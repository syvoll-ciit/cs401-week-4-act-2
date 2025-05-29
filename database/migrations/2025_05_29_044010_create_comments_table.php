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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_content')->comment('Comment of a content.');
            $table->timestamp('comment_date')->comment('Date of a content.');
            $table->string('reviewer_name')->comment('Name of a reviewer.');
            $table->string('reviewer_email')->comment('Email of a reviewer.');
            $table->boolean('is_hidden')->comment('Hidden comments.')->default(false);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
