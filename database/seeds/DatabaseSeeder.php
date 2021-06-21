<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}
