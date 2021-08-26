<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sujet_thème', function(Blueprint $table)
		{
			$table->id();
			$table->integer('sujet_id')->index('sujet_id');
			$table->foreign('sujet_id')
				->references('id')
				->on('sujets');
			$table->string('thème_id', 50)->index('thème_id');
			$table->foreign('thème_id')
				->references('id')
				->on('thèmes')
				->onDelete('cascade')
				->onUpdate('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notions');
	}

}
