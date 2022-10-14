<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration {

	public function up()
	{
		Schema::create('classes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('teacher_id');
			$table->integer('course_id');
			$table->tinyInteger('week_day');
			$table->time('start_at');
			$table->datetime('open_in');
		});
	}

	public function down()
	{
		Schema::drop('classes');
	}
}