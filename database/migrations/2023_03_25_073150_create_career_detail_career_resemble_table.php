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
        Schema::create('careers_detail_career_resemble', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->comment('id');
            $table->unsignedBigInteger('career_detail_main_id')->unsigned()->comment('รหัสดีเทลหลัก');

            $table->string('career_detail_career_resemble', 255)->nullable()->comment('สามารถทำอาชีพอะไรได้อีกบ้าง');

            $table->timestamp('career_detail_career_resemble_at')->nullable()->comment('วันที่สร้าง');
            $table->string('career_detail_career_resemble_by', 50)->nullable()->comment('สร้างโดยใคร');
            $table->timestamp('career_detail_career_resemble_up_at')->nullable()->comment('วันที่แก้ไข');
            $table->string('career_detail_career_resemble_up_by', 50)->nullable()->comment('แก้ไขโดยใคร');
            $table->softDeletes('career_detail_career_resemble_del_at', 0)->nullable()->comment('วันที่ลบ');
            $table->string('career_detail_career_resemble_del_by', 50)->nullable()->comment('ลบโดยใคร');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_detail_career_resemble');
    }
};
