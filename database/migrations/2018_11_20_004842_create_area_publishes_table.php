<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAreaPublishesTable.
 */
class CreateAreaPublishesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('area_publishes', function(Blueprint $table) {
            $table->integer('area_id')->unsigned();
			$table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
			$table->integer('publish_id')->unsigned();
			$table->foreign('publish_id')->references('id')->on('publishes')->onDelete('cascade');
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
		Schema::drop('area_publishes');
	}
}
