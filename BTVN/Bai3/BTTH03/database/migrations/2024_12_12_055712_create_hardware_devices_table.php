<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id(); // id là khóa chính
            $table->string('device_name'); // Tên thiết bị
            $table->string('type'); // Loại thiết bị
            $table->boolean('status')->default(true); // Trạng thái thiết bị (true = đang hoạt động, false = hỏng)
            $table->unsignedBigInteger('center_id'); // Khóa ngoại tới bảng it_centers
            $table->timestamps(); // created_at và updated_at

            // Định nghĩa khóa ngoại
            $table->foreign('center_id')->references('id')->on('it_centers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hardware_devices');
    }
};
