<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddValueImageFieldsToSettingsTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function(Blueprint $table) {

            $table->string('value_image_file_name')->nullable();
            $table->integer('value_image_file_size')->nullable()->after('value_image_file_name');
            $table->string('value_image_content_type')->nullable()->after('value_image_file_size');
            $table->timestamp('value_image_updated_at')->nullable()->after('value_image_content_type');

        });

    }

    /**
     * Revert the changes to the table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function(Blueprint $table) {

            $table->dropColumn('value_image_file_name');
            $table->dropColumn('value_image_file_size');
            $table->dropColumn('value_image_content_type');
            $table->dropColumn('value_image_updated_at');

        });
    }

}