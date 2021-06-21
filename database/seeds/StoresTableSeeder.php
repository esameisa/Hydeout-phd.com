<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stores')->delete();
        
        \DB::table('stores')->insert(array (
            0 => 
            array (
                'id' => 18,
                'title' => 'Picnic Store',
                'content' => 'Picnic Store',
                'created_at' => '2017-12-18 11:27:50',
                'updated_at' => '2017-12-26 13:14:34',
                'logo_file_name' => 'sponsor-logo-01.png',
                'logo_file_size' => 18121,
                'logo_content_type' => 'image/png',
                'logo_updated_at' => '2017-12-26 13:14:00',
            ),
            1 => 
            array (
                'id' => 19,
                'title' => 'Kids Store',
                'content' => 'Kids Store',
                'created_at' => '2017-12-18 11:27:50',
                'updated_at' => '2017-12-26 13:15:05',
                'logo_file_name' => 'sponsor-logo-02.png',
                'logo_file_size' => 13401,
                'logo_content_type' => 'image/png',
                'logo_updated_at' => '2017-12-26 13:15:05',
            ),
            2 => 
            array (
                'id' => 20,
                'title' => 'Fashion &amp; Accessories',
                'content' => 'Fashion &amp; Accessories',
                'created_at' => '2017-12-18 11:27:50',
                'updated_at' => '2017-12-26 13:15:49',
                'logo_file_name' => 'sponsor-logo-04.png',
                'logo_file_size' => 7635,
                'logo_content_type' => 'image/png',
                'logo_updated_at' => '2017-12-26 13:15:49',
            ),
            3 => 
            array (
                'id' => 21,
                'title' => 'Pet Store',
                'content' => 'Pet Store',
                'created_at' => '2017-12-18 11:27:50',
                'updated_at' => '2017-12-26 13:16:10',
                'logo_file_name' => 'sponsor-logo-01.png',
                'logo_file_size' => 18121,
                'logo_content_type' => 'image/png',
                'logo_updated_at' => '2017-12-26 13:16:10',
            ),
            4 => 
            array (
                'id' => 22,
                'title' => 'Pharmacy',
                'content' => 'Pharmacy',
                'created_at' => '2017-12-18 11:27:50',
                'updated_at' => '2017-12-26 13:16:36',
                'logo_file_name' => 'sponsor-logo-01.png',
                'logo_file_size' => 18121,
                'logo_content_type' => 'image/png',
                'logo_updated_at' => '2017-12-26 13:16:36',
            ),
            5 => 
            array (
                'id' => 23,
                'title' => 'Supermarket',
                'content' => 'Supermarket',
                'created_at' => '2017-12-18 11:27:50',
                'updated_at' => '2017-12-26 13:16:58',
                'logo_file_name' => 'sponsor-logo-04.png',
                'logo_file_size' => 7635,
                'logo_content_type' => 'image/png',
                'logo_updated_at' => '2017-12-26 13:16:58',
            ),
            6 => 
            array (
                'id' => 24,
                'title' => 'Convenience Store',
                'content' => 'Convenience Store',
                'created_at' => '2017-12-18 11:27:50',
                'updated_at' => '2017-12-26 13:17:20',
                'logo_file_name' => 'sponsor-logo-01.png',
                'logo_file_size' => 18121,
                'logo_content_type' => 'image/png',
                'logo_updated_at' => '2017-12-26 13:17:20',
            ),
        ));
        
        
    }
}