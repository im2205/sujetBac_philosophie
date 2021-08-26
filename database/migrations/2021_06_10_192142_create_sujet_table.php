<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSujetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sujets', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->smallInteger('année_id');
			$table->string('filière_id', 50)->index('filière_id');
			$table->string('region_id', 50)->index('region_id');
			$table->string('session_id', 50)->index('session_id');
			$table->integer('type_id')->index('type_id');
			$table->text('nomSujet')->nullable();
			$table->string('auteur_id', 50)->index('auteur_id');
			// $table->primary(['année_id','id']);
			// $table->foreign('type_id')->references('id')->on('types');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sujets');
	}

}
