<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('templates', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->longText('content1')->nullable();
            $table->longText('content2')->nullable();


            $table->string('image1_file_name')->nullable();
            $table->integer('image1_file_size')->nullable();
            $table->string('image1_content_type')->nullable();
            $table->timestamp('image1_updated_at')->nullable();


            $table->string('image2_file_name')->nullable();
            $table->integer('image2_file_size')->nullable();
            $table->string('image2_content_type')->nullable();
            $table->timestamp('image2_updated_at')->nullable();


            $table->string('url1')->nullable();
            $table->string('url2')->nullable();
            $table->integer('parent_id')->nullable();
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
		Schema::drop('templates');
	}

}
