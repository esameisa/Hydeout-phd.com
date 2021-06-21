<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'title1',
                'email' => 'borer.kayla@example.net',
                'number' => '+1324120371978',
                'message' => 'Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.Five and Seven said nothing, but looked at.',
                'created_at' => '2017-12-18 12:53:49',
                'updated_at' => '2017-12-18 12:53:49',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'title2',
                'email' => 'kimberly.haag@example.org',
                'number' => '+5171342564092',
                'message' => 'This time there were no arches left, and all the time he had to.',
                'created_at' => '2017-12-18 12:53:49',
                'updated_at' => '2017-12-18 12:53:49',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'title3',
                'email' => 'fay.maymie@example.com',
                'number' => '+9700604795189',
                'message' => 'King say in a very interesting dance to watch,\' said Alice.',
                'created_at' => '2017-12-18 12:53:49',
                'updated_at' => '2017-12-18 12:53:49',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'title4',
                'email' => 'stiedemann.shaylee@example.com',
                'number' => '+2087380989042',
                'message' => 'I can kick a little!\' She drew her foot as far down.',
                'created_at' => '2017-12-18 12:53:49',
                'updated_at' => '2017-12-18 12:53:49',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'title5',
                'email' => 'alejandrin.toy@example.com',
                'number' => '+2653704374664',
                'message' => 'Mock Turtle in a hurry: a large flower-pot that stood near..',
                'created_at' => '2017-12-18 12:53:49',
                'updated_at' => '2017-12-18 12:53:49',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'title6',
                'email' => 'stroman.bartholome@example.net',
                'number' => '+9546292170129',
                'message' => 'Mock Turtle: \'crumbs would all come wrong, and she could have been a.',
                'created_at' => '2017-12-18 12:53:49',
                'updated_at' => '2017-12-18 12:53:49',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'title7',
                'email' => 'medhurst.marquis@example.net',
                'number' => '+7944499826318',
                'message' => 'Alice watched the Queen say only yesterday you deserved to be a great crash, as if it makes me.',
                'created_at' => '2017-12-18 12:53:49',
                'updated_at' => '2017-12-18 12:53:49',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'title8',
                'email' => 'alek00@example.com',
                'number' => '+8905905398564',
                'message' => 'She ate a little ledge of rock, and, as a lark, And will talk in.',
                'created_at' => '2017-12-18 12:53:49',
                'updated_at' => '2017-12-18 12:53:49',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'asdasd',
                'email' => 'asd@messa.com',
                'number' => '123123123',
                'message' => 'message',
                'created_at' => '2017-12-25 16:28:17',
                'updated_at' => '2017-12-25 16:28:17',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'name',
                'email' => 'name@name.com',
                'number' => 'number',
                'message' => 'message',
                'created_at' => '2017-12-25 16:37:05',
                'updated_at' => '2017-12-25 16:37:05',
            ),
        ));
        
        
    }
}