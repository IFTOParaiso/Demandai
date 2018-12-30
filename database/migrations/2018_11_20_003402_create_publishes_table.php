<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePublishesTable.
 */
class CreatePublishesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publishes', function(Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->longText('description');
			$table->date('date_closure');
			$table->char('link', 255);
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
		Schema::drop('publishes');
	}
}
