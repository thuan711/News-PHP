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
        Schema::create('dienthoai', function (Blueprint $table) {
            $table->id();
            $table->string('tenDT',30)->unique();
            $table->text('moTa')->nullable();
            $table->dateTime('ngayCapNhap');
            $table->double('gia',8,2);
            $table->double('giakm',8,2);
            $table->double('urlHinh',200)->nullable();
            $table->integer('slton')->default(0);
            $table->boolean('hot')->default(1);
            $table->boolean('anHien')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dienthoai');
    }
};
