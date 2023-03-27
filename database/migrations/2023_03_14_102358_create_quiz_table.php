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
        Schema::create('quiz', function (Blueprint $table) {
            $table->bigIncrements('quiz_id')->unsigned()->comment('รหัสแบบสอบถาม');
            $table->unsignedBigInteger('type_score_id')->unsigned()->comment('รหัสประเภทคะแนน');
            $table->string('quiz_name', 255)->comment('แบบสอบถาม');
            $table->timestamp('quiz_at')->nullable()->comment('วันที่สร้าง');
            $table->string('quiz_by', 50)->nullable()->comment('สร้างโดยใคร');
            $table->timestamp('quiz_up_at')->nullable()->comment('วันที่แก้ไข');
            $table->string('quiz_up_by', 50)->nullable()->comment('แก้ไขโดยใคร');
            $table->softDeletes('quiz_del_at', 0)->nullable()->comment('วันที่ลบ');
            $table->string('quiz_del_by', 50)->nullable()->comment('ลบโดยใคร');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz');
    }
};
