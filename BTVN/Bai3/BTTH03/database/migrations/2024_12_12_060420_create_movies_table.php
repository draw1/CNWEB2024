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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); //id là khoa chính
            $table->string('title'); //Tên phim
            $table->string('director'); //Đạo diễn
            $table->date('release date'); //Ngày phát hành
            $table->integer('duration'); //Thời lượng phim
            $table->foreignId('cinema_id')->constrained('cinemas')->onDelete('cascade'); //khóa ngoại tham chiếu đến cinemas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
