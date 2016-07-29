<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 * $table->foreign('user_id')->references('id')->on('users');
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('name',150);
			$table->string('email',100)->unique();
			$table->string('egerarquico',100);
			$table->string('cargo',100);
			$table->string('telefono',100);
			$table->string('password', 60);
			$table->integer('cc_id');
			$table->foreign('cc_id')->references('cc_id')->on('centro_costo');//$table->integer('cc_id')->unsigned();
			//$table->foreign('cc_id')->references('cc_id')->on('centro_costos');
			$table->rememberToken();
			$table->timestamps();



			//$table->integer('id_director')->unsigned();//unsigned, hace referencia a que procede de otra tabla//identificador del director a la cualpertenece
			
			/*Relaciones*/

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
