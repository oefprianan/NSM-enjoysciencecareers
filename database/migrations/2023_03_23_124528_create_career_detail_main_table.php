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
        Schema::create('careers_detail_main', function (Blueprint $table) {

            $table->bigIncrements('career_detail_main_id')->unsigned()->comment('รหัสดีเทลหลัก');
            $table->unsignedBigInteger('category_career_id')->unsigned()->comment('รหัสหมวดหมู่อาชีพ');
            $table->unsignedBigInteger('career_id')->unsigned()->comment('รหัสอาชีพ');

            $table->longText('career_detail_salary')->nullable()->comment('เงินเดือน');
            $table->longText('career_detail_job_description')->nullable()->comment('ลักษณะงาน');
            $table->longText('career_detail_tools')->nullable()->comment('ทำงานเกี่ยวข้องกับเครื่องมืออะไรบ้าง');
            $table->longText('career_detail_hard_skills')->nullable()->comment('Hard skills');
            $table->longText('career_detail_soft_skills')->nullable()->comment('Soft skills');
            $table->longText('career_detail_characteristic')->nullable()->comment('คุณลักษณะนิสัยส่วนบุคคล');
            $table->longText('career_detail_work_together')->nullable()->comment('สาขาอาชีพอื่นๆ ที่ต้องทำงานร่วม');
            $table->longText('career_detail_progress')->nullable()->comment('ความก้าวหน้าในสายงาน');
            
            $table->longText('career_detail_vdo')->nullable()->comment('vdo');
            $table->string('career_detail_character', 255)->nullable()->comment('Character');
            $table->string('career_detail_visual_note', 255)->nullable()->comment('Visual_Note');
            $table->string('career_detail_cover', 255)->nullable()->comment('Cover');

            $table->timestamp('career_detail_main_at')->nullable()->comment('วันที่สร้าง');
            $table->string('career_detail_main_by', 50)->nullable()->comment('สร้างโดยใคร');
            $table->timestamp('career_detail_main_up_at')->nullable()->comment('วันที่แก้ไข');
            $table->string('career_detail_main_up_by', 50)->nullable()->comment('แก้ไขโดยใคร');
            $table->softDeletes('career_detail_main_del_at', 0)->nullable()->comment('วันที่ลบ');
            $table->string('career_detail_main_del_by', 50)->nullable()->comment('ลบโดยใคร');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_detail_main');
    }
};
