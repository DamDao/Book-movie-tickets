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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('code')->comment('mã giảm giá');
            $table->double('value')->comment('giá giảm');
            $table->string('discount_type')->comment('loại giảm giá: giảm theo % or giảm trực tiếp giá tiền');
            $table->date('begin_date')->comment('ngày bắt đầu');

            $table->date('expiry_date')->comment('ngày hết hạn');
            $table->integer('usage_limit')->default(0)->comment('số lượng tối đa lần mà mã giảm giá có thể được sử dụng');
            $table->integer('status')->default(1)->comment('hoạt động và ko hoạt động'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
