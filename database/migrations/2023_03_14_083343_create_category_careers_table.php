<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_careers', function (Blueprint $table) {
            $table->bigIncrements('category_career_id')->unsigned()->comment('รหัสหมวดหมู่อาชีพ');
            $table->string('category_career_name', 255)->comment('ชื่อหมวดหมู่อาชีพ');
            $table->string('category_career_picture', 255)->nullable()->comment('รูปภาพ');
            $table->timestamp('category_career_at')->nullable()->comment('วันที่สร้าง');
            $table->string('category_career_by', 50)->nullable()->comment('สร้างโดยใคร');
            $table->timestamp('category_career_up_at')->nullable()->comment('วันที่แก้ไข');
            $table->string('category_career_up_by', 50)->nullable()->comment('แก้ไขโดยใคร');
            $table->softDeletes('category_career_del_at', 0)->nullable()->comment('วันที่ลบ');
            $table->string('category_career_del_by', 50)->nullable()->comment('ลบโดยใคร');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_careers');
    }
};
