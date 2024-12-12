<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('renters', function (Blueprint $table) {
            $table->id(); // id là khóa chính
            $table->string('name'); // Tên người thuê
            $table->string('phone_number'); // Số điện thoại
            $table->string('email')->unique(); // Email (đảm bảo không trùng)
            $table->timestamps(); // created_at và updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('renters');
    }
};
