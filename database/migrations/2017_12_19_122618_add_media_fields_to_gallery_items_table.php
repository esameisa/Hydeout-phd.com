<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddMediaFieldsToGalleryItemsTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gallery_items', function(Blueprint $table) {

            $table->string('media_file_name')->nullable();
            $table->integer('media_file_size')->nullable()->after('media_file_name');
            $table->string('media_content_type')->nullable()->after('media_file_size');
            $table->timestamp('media_updated_at')->nullable()->after('media_content_type');

        });

    }

    /**
     * Revert the changes to the table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gallery_items', function(Blueprint $table) {

            $table->dropColumn('media_file_name');
            $table->dropColumn('media_file_size');
            $table->dropColumn('media_content_type');
            $table->dropColumn('media_updated_at');

        });
    }

}