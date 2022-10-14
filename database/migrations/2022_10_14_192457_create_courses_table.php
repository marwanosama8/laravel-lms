<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('grade_id');
			$table->timestamps();
			$table->datetime('start_at');
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}