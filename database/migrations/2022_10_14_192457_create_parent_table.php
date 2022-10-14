<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentTable extends Migration {

	public function up()
	{
		Schema::create('parents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->smallInteger('age');
			$table->string('phone');
			$table->smallInteger('country_id');
			$table->smallInteger('city_id');
			$table->string('email');
			$table->datetime('member_at');
		});
	}

	public function down()
	{
		Schema::drop('parent');
	}
}