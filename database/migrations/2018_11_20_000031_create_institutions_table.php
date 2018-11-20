<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateInstitutionsTable.
 */
class CreateInstitutionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('institutions', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->longText('description');
			$table->string('email');
			$table->string('phone');
			$table->string('site');
			$table->boolean('status');
			$table->string('street');
			$table->string('number');
			$table->string('sector');
			$table->string('city');
			$table->string('complement');
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
		Schema::drop('institutions');
	}
}
