<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->string('name');
            $table->string('content');
            $table->string('modules');
            $table->timestamp('plan_started_at');
            $table->timestamp('plan_end_at');
            $table->integer('plan_spend')->unsigned();
            $table->timestamp('cycle');         //循环周期 一周
            $table->timestamp('cycle_val');     //循环时间 周二
            $table->integer('priority')->unsigned();    //优先级
            $table->timestamp('actually_started_at');   //实际开始时间
            $table->timestamp('actually_end_at');       //实际结束事件
            $table->integer('status')->unsigned();      //0 未执行 1 执行中 2 完成 3未完成 4 修改
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
