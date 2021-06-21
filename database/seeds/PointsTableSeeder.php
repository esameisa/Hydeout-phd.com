<?php

use Illuminate\Database\Seeder;

class PointsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('points')->delete();
        
        \DB::table('points')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'main_entrance',
                'value' => 'Main Entrance',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-26 14:56:35',
                'name' => 'Main Entrance',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'retail',
                'value' => 'Retail',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Retail',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'main_restaurant',
                'value' => 'Main Restaurant',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Main Restaurant',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'gym_area',
                'value' => 'Gym Area',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Gym Area',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'dogs_park',
                'value' => 'Dogs Park',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Dogs Park',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin_clinic',
                'value' => 'Admin Clinic',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Admin Clinic',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'events_tent',
                'value' => 'Events Tent',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Events Tent',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'toilets',
                'value' => 'Toilets',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Toilets',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'restaurants',
                'value' => 'Restaurants',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Restaurants',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'food_trucks',
                'value' => 'Food Trucks',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Food Trucks',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'picnic_park',
                'value' => 'Picnic Park',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Picnic Park',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'stage',
                'value' => 'Stage',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Stage',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'kids_area',
                'value' => 'Kids Area',
                'created_at' => '2017-12-23 16:02:38',
                'updated_at' => '2017-12-23 16:02:38',
                'name' => 'Kids Area',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'kids_activity_building',
                'value' => 'Kids Activity Building',
                'created_at' => '2017-12-23 16:02:39',
                'updated_at' => '2017-12-23 16:02:39',
                'name' => 'Kids Activity Building',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'paintball_building',
                'value' => 'Paintball Building',
                'created_at' => '2017-12-23 16:02:39',
                'updated_at' => '2017-12-23 16:02:39',
                'name' => 'Paintball Building',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'paintball_feild',
                'value' => 'Paintball Feild',
                'created_at' => '2017-12-23 16:02:39',
                'updated_at' => '2017-12-23 16:02:39',
                'name' => 'Paintball Feild',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'restaurants_storage',
                'value' => 'Restaurants Storage',
                'created_at' => '2017-12-23 16:02:39',
                'updated_at' => '2017-12-23 16:02:39',
                'name' => 'Restaurants Storage',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'supermarket',
                'value' => 'Supermarket',
                'created_at' => '2017-12-23 16:02:39',
                'updated_at' => '2017-12-23 16:02:39',
                'name' => 'Supermarket',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'staff_building',
                'value' => 'Staff Building',
                'created_at' => '2017-12-23 16:02:39',
                'updated_at' => '2017-12-23 16:02:39',
                'name' => 'Staff Building',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'picnic_retail',
                'value' => 'Picnic Retail',
                'created_at' => '2017-12-23 16:02:39',
                'updated_at' => '2017-12-23 16:02:39',
                'name' => 'Picnic Retail',
            ),
        ));
        
        
    }
}