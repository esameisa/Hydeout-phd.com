<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 15,
                'key' => 'general_queries_message',
                'value' => 'Want to get in touch? Fill out the below form, call us at 123456 or drop us an email at',
                'created_at' => '2017-12-19 11:29:41',
                'updated_at' => '2017-12-24 11:09:01',
                'name' => 'General Queries Message',
            ),
            1 => 
            array (
                'id' => 16,
                'key' => 'tentant_quiries_message',
                'value' => 'Are you looking to lease at Hyde Out? Do you have an interesting activity or event to host at Hyde Out? Drop us an email at',
                'created_at' => '2017-12-19 11:29:41',
                'updated_at' => '2017-12-19 11:29:41',
                'name' => 'Tentant Quiries Message',
            ),
            2 => 
            array (
                'id' => 17,
                'key' => 'general_queries_email',
                'value' => 'hydeout@hpd.com.eg',
                'created_at' => '2017-12-19 11:29:41',
                'updated_at' => '2017-12-19 11:29:41',
                'name' => 'General Queries Email',
            ),
            3 => 
            array (
                'id' => 18,
                'key' => 'tentant_quiries_email',
                'value' => 'hydeout@hpd.com.eg',
                'created_at' => '2017-12-19 11:29:41',
                'updated_at' => '2017-12-19 11:29:41',
                'name' => 'Tentant Quiries Email',
            ),
            4 => 
            array (
                'id' => 19,
                'key' => 'hotline_number',
                'value' => '123',
                'created_at' => '2017-12-19 11:29:41',
                'updated_at' => '2017-12-19 11:29:41',
                'name' => 'Hotline Number',
            ),
            5 => 
            array (
                'id' => 20,
                'key' => 'facebook_link',
                'value' => 'http://www.facebook.com',
                'created_at' => '2017-12-19 11:29:41',
                'updated_at' => '2017-12-24 15:01:22',
                'name' => 'Facebook Link',
            ),
            6 => 
            array (
                'id' => 21,
                'key' => 'instagram_link',
                'value' => 'http://www.instagram.com',
                'created_at' => '2017-12-19 11:29:41',
                'updated_at' => '2017-12-24 15:01:07',
                'name' => 'Instagram Link',
            ),
            7 => 
            array (
                'id' => 22,
                'key' => 'youtube_link',
                'value' => 'http://www.youtube.com',
                'created_at' => '2017-12-19 11:29:41',
                'updated_at' => '2017-12-24 15:01:07',
                'name' => 'Youtube Link',
            ),
        ));
        
        
    }
}
