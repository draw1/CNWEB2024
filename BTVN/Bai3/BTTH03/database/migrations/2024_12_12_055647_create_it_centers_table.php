<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('it_centers', function (Blueprint $table) {
            $table->id(); // id là khóa chính
            $table->string('name'); // Tên trung tâm
            $table->string('location'); // Địa điểm
            $table->string('contact_email')->unique(); // Email liên hệ
            $table->timestamps(); // created_at và updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('it_centers');
    }
};
