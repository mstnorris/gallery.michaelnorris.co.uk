<?php

use App\Photo;
use App\Profile;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\User;
use Webpatser\Uuid\Uuid;

class ConstantsTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {
        $faker = Faker::create('en_US');

        /*
         * Base User Accounts
         */

        // Mike's account
        $michael = User::create([
            'name'       => 'Michael Norris',
            'email'      => 'mstnorris@gmail.com',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        //$michaelProfile = Profile::create([
        //    'user_id'    => $michael->id,
        //    'nick_name'  => 'Mike',
        //    'photo_url'  => 'https://placeholdit.imgix.net/~text?txt=Mike&txtsize=80&bg=eceff1&txtclr=607d8b&w=640&h=640', //'/profile_photos/mike.jpg',
        //    'created_at' => Carbon::now(),
        //    'updated_at' => Carbon::now()
        //]);
        //
        //$michael->profile()->save($michaelProfile);

        unset($photos);
        $photos = [];
        foreach (range(1, 20) as $index) {
            $photos[] = [
                'id'   => Uuid::generate(4),
                'path' => $index . '.jpeg'
            ];
            //echo $photos[$index + 1] . "\r\n";
        }
        Photo::insert($photos);

    }
    
}