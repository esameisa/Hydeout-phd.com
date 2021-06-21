<?php

use Illuminate\Database\Seeder;

class addSettingRecords extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->insert(array (
                'name' => 'Explore Elements Play Provider contact message',
                'key' => 'explore_elements_play_provider_contact_message',
                'value' => 'for reservation call ....',
                'type' => 'text',
                'namespace' => 'explore_elements_play'
            ));

        \DB::table('settings')->insert(array (
                'name' => 'Explore Elements pet_time Provider contact message',
                'key' => 'explore_elements_pet_time_provider_contact_message',
                'value' => 'for reservation call ....',
                'type' => 'text',
                'namespace' => 'explore_elements_pet_time'
            ));

        \DB::table('settings')->insert(array (
                'name' => 'Explore Elements exercise Provider contact message',
                'key' => 'explore_elements_exercise_provider_contact_message',
                'value' => 'for reservation call ....',
                'type' => 'text',
                'namespace' => 'explore_elements_exercise'
            ));
    }
}
