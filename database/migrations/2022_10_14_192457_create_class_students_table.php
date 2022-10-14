<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassStudentsTable extends Migration {

	public function up()
	{
		Schema::create('class_students', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('class_id');
			$table->integer('student_id');
		});
	}

	public function down()
	{
		Schema::drop('class_students');
	}
}