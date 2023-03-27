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
        Schema::create('careers_detail_education', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->comment('id');
            $table->unsignedBigInteger('career_detail_main_id')->unsigned()->comment('รหัสดีเทลหลัก');

            $table->unsignedBigInteger('career_detail_education_id')->unsigned()->comment('รหัสการศึกษา 1 = เอก, 2 = โท, 3 = ตรี, 4 = อาชีวะ');
            $table->string('career_detail_education_faculty', 255)->nullable()->comment('คณะ');
            $table->string('career_detail_education_major', 255)->nullable()->comment('สาขา');

            $table->timestamp('career_detail_education_at')->nullable()->comment('วันที่สร้าง');
            $table->string('career_detail_education_by', 50)->nullable()->comment('สร้างโดยใคร');
            $table->timestamp('career_detail_education_up_at')->nullable()->comment('วันที่แก้ไข');
            $table->string('career_detail_education_up_by', 50)->nullable()->comment('แก้ไขโดยใคร');
            $table->softDeletes('career_detail_education_del_at', 0)->nullable()->comment('วันที่ลบ');
            $table->string('career_detail_education_del_by', 50)->nullable()->comment('ลบโดยใคร');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_detail_education');
    }
};
