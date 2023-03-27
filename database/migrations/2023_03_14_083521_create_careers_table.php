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
        Schema::create('careers', function (Blueprint $table) {
            $table->bigIncrements('career_id')->unsigned()->comment('รหัสอาชีพ');
            $table->unsignedBigInteger('category_career_id')->unsigned()->comment('รหัสหมวดหมู่อาชีพ');
            $table->string('career_name_th', 255)->comment('อาชีพภาษาไทย');
            $table->string('career_name_en', 255)->comment('อาชีพภาษาอังกฤษ');
            $table->string('score_naturalistic', 2)->comment('คะแนนด้านธรรมชาติ');
            $table->string('score_intrapersonal', 2)->comment('คะแนนความเข้าใจตนเอง');
            $table->string('score_interpersonal', 2)->comment('คะแนนมนุษย์สัมพันธ์');
            $table->string('score_musical', 2)->comment('คะแนนดนตรี');
            $table->string('score_bodily_kinesthetic', 2)->comment('คะแนนร่างกายและการเคลื่อนไหว');
            $table->string('score_spatial', 2)->comment('คะแนนมิติสัมพันธ์');
            $table->string('score_logical_mathematical', 2)->comment('คะแนนตรรกะและคณิตศาสตร์');
            $table->string('score_linguistic', 2)->comment('คะแนนภาษา');
            $table->string('career_picture', 255)->nullable()->comment('รูปภาพ');
            $table->timestamp('career_at')->nullable()->comment('วันที่สร้าง');
            $table->string('career_by', 50)->nullable()->comment('สร้างโดยใคร');
            $table->timestamp('career_up_at')->nullable()->comment('วันที่แก้ไข');
            $table->string('career_up_by', 50)->nullable()->comment('แก้ไขโดยใคร');
            $table->softDeletes('career_del_at', 0)->nullable()->comment('วันที่ลบ');
            $table->string('career_del_by', 50)->nullable()->comment('ลบโดยใคร');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
};
