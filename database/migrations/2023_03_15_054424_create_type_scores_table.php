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
        Schema::create('type_scores', function (Blueprint $table) {
            $table->bigIncrements('type_score_id')->unsigned()->comment('รหัสประเภทคะแนน');
            $table->string('type_score_name_th', 255)->comment('ชื่อประเภทคะแนนภาษาไทย');
            $table->string('type_score_name_en', 255)->comment('ชื่อประเภทคะแนนภาษาอังกฤษ');
            $table->timestamp('type_score_at')->nullable()->comment('วันที่สร้าง');
            $table->string('type_score_by', 50)->nullable()->comment('สร้างโดยใคร');
            $table->timestamp('type_score_up_at')->nullable()->comment('วันที่แก้ไข');
            $table->string('type_score_up_by', 50)->nullable()->comment('แก้ไขโดยใคร');
            $table->softDeletes('type_score_del_at', 0)->nullable()->comment('วันที่ลบ');
            $table->string('type_score_del_by', 50)->nullable()->comment('ลบโดยใคร');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_scores');
    }
};
