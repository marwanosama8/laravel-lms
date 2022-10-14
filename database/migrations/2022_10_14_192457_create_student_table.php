<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('phone');
			$table->integer('age');
			$table->string('email');
			$table->string('grade_id');
			$table->integer('parent_id')->unsigned();
			$table->string('code');
			$table->string('admin_id');
			$table->datetime('member_at');
			$table->smallInteger('country_id');
			$table->smallInteger('city_id');
			$table->string('school_name');
		});
	}

	public function down()
	{
		Schema::drop('student');
	}
}