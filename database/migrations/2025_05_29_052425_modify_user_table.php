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
            //$table->timestamp('email_verified_at')->comment('Date of verification.')->nullable();
            $table->timestamp('registration_date')->comment('Date of registration.')->default(now()); //kukunin ng system yung date
            $table->timestamp('last_login_date')->comment('Date of last login.')->nullable();
            $table->dropTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function(Blueprint $table){
            //$table->timestamp('email_verified_at')->comment('Date of verification.')->nullable();
            $table->dropColumn('registration_date');
            $table->dropColumn('last_login_date');
            $table->timestamps();
        });
    }
};
