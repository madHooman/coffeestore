<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->string('slug')->nullable();
            $table->string('img_slider')->nullable(); // عکس شاخص
            $table->integer('user_id')->unsigned()->nullable(); // نویسنده مقاله (اختیاری)
            $table->integer('category_id')->unsigned()->nullable(); // دسته‌بندی (اختیاری)
            $table->timestamps();  // created_at و updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
