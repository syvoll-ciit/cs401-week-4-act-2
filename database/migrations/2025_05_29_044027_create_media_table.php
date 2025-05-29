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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->comment('File name of a media.');
            $table->string('file_type')->comment('File type of a media.');
            $table->integer('file_size')->comment('File size of a media.')->nullable();
            $table->string('url')->comment('URL of media.');
            $table->timestamp('upload_date')->comment('Date of upload of a media.');
            $table->string('description')->comment('Description of a media.');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
