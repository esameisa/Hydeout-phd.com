<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddMainImageFieldsToGalleriesTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galleries', function(Blueprint $table) {

            $table->string('main_image_file_name')->nullable();
            $table->integer('main_image_file_size')->nullable()->after('main_image_file_name');
            $table->string('main_image_content_type')->nullable()->after('main_image_file_size');
            $table->timestamp('main_image_updated_at')->nullable()->after('main_image_content_type');

        });

    }

    /**
     * Revert the changes to the table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galleries', function(Blueprint $table) {

            $table->dropColumn('main_image_file_name');
            $table->dropColumn('main_image_file_size');
            $table->dropColumn('main_image_content_type');
            $table->dropColumn('main_image_updated_at');

        });
    }

}