<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id(); // id là khóa chính
            $table->string('brand'); // Hãng sản xuất
            $table->string('model'); // Mẫu laptop
            $table->text('specifications'); // Thông số kỹ thuật
            $table->boolean('rental_status')->default(false); // Trạng thái thuê (false = chưa thuê, true = đang thuê)
            $table->unsignedBigInteger('renter_id')->nullable(); // Khóa ngoại tới bảng renters
            $table->timestamps(); // created_at và updated_at

            // Định nghĩa khóa ngoại
            $table->foreign('renter_id')->references('id')->on('renters')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('laptops');
    }
};
