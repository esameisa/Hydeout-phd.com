<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2017_12_11_143018_create_templates_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2017_12_18_090124_create_stores_table',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2017_12_18_123559_create_messages_table',
                'batch' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2017_12_19_090008_create_contacts_table',
                'batch' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2017_12_19_101828_remove_logo_from_stores',
                'batch' => 5,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2017_12_19_103151_add_logo_fields_to_stores_table',
                'batch' => 6,
            ),
            8 => 
            array (
                'id' => 10,
                'migration' => '2017_12_20_133521_create_settings_table',
                'batch' => 7,
            ),
            9 => 
            array (
                'id' => 11,
                'migration' => '2017_12_21_141601_add_value_image_fields_to_settings_table',
                'batch' => 8,
            ),
            10 => 
            array (
                'id' => 13,
                'migration' => '2017_12_23_105343_create_points_table',
                'batch' => 9,
            ),
            11 => 
            array (
                'id' => 14,
                'migration' => '2017_12_17_154112_create_events_table',
                'batch' => 10,
            ),
            12 => 
            array (
                'id' => 15,
                'migration' => '2017_12_19_122127_create_galleries_table',
                'batch' => 10,
            ),
            13 => 
            array (
                'id' => 16,
                'migration' => '2017_12_19_122454_create_gallery_items_table',
                'batch' => 10,
            ),
            14 => 
            array (
                'id' => 17,
                'migration' => '2017_12_19_122618_add_media_fields_to_gallery_items_table',
                'batch' => 10,
            ),
            15 => 
            array (
                'id' => 18,
                'migration' => '2017_12_19_123020_add_main_image_fields_to_galleries_table',
                'batch' => 10,
            ),
            16 => 
            array (
                'id' => 19,
                'migration' => '2017_12_26_144423_add_name_to_points',
                'batch' => 11,
            ),
            17 => 
            array (
                'id' => 20,
                'migration' => '2017_12_26_150005_add_name_to_contacts',
                'batch' => 12,
            ),
        ));
        
        
    }
}