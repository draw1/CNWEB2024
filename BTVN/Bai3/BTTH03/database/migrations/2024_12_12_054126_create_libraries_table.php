<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id(); // id là khóa chính
            $table->string('name'); // Tên thư viện
            $table->string('address'); // Địa chỉ
            $table->string('contact_number'); // Số điện thoại liên hệ
            $table->timestamps(); // created_at và updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('libraries');
    }
};
