<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('areas', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('no action')
						->onUpdate('no action');
		});

		Schema::table('covered_areas', function(Blueprint $table) {
			$table->foreign('area_id')->references('id')->on('areas')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('covered_areas', function(Blueprint $table) {
			$table->foreign('employee_id')->references('id')->on('users')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('delivery_tasks', function(Blueprint $table) {
			$table->foreign('employee_id')->references('id')->on('users')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('delivery_tasks', function(Blueprint $table) {
			$table->foreign('order_id')->references('id')->on('orders')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('author_id')->references('id')->on('users')
						->onDelete('no action')
						->onUpdate('no action');
		});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

		Schema::table('areas', function(Blueprint $table) {
			$table->dropForeign('areas_city_id_foreign');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_country_id_foreign');
		});
		Schema::table('covered_areas', function(Blueprint $table) {
			$table->dropForeign('covered_areas_area_id_foreign');
		});
		Schema::table('covered_areas', function(Blueprint $table) {
			$table->dropForeign('covered_areas_employee_id_foreign');
		});
		Schema::table('delivery_tasks', function(Blueprint $table) {
			$table->dropForeign('delivery_tasks_employee_id_foreign');
		});
		Schema::table('delivery_tasks', function(Blueprint $table) {
			$table->dropForeign('delivery_tasks_order_id_foreign');
		});


		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_author_id_foreign');
		});


    }
};
