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
        Schema::create('users_with_pro', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('profession');
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
            $table->string('profile_pic')->default('https://www.alleycat.org/wp-content/uploads/2019/03/FELV-cat.jpg');
            $table -> json('skills')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
