<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
			$table->string('name');
			$table->string('last_name');
			$table->string('middle_name');
			$table->string('itesm_id');
			$table->string('career');
			$table->integer('semester');
			$table->string('status');
			$table->boolean('delivered');
      		$table->boolean('confirmed');
      		$table->boolean('rated');
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
		Schema::drop('students');
	}

}
