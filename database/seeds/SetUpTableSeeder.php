<?php

use App\Profile;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\User;

class SetUpTableSeeder extends Seeder
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
        
        $michaelProfile = Profile::create([
            'user_id'    => $michael->id,
            'photo_url'  => 'https://placeholdit.imgix.net/~text?txt=Mike&txtsize=80&bg=eceff1&txtclr=607d8b&w=640&h=640', //'/profile_photos/mike.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        $michael->profile()->save($michaelProfile);

        // Jim's account
        $james = User::create([
            'name'       => 'James Norris',
            'email'      => 'jwgnorris@gmail.com',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $jamesProfile = Profile::create([
            'user_id'    => $james->id,
            'photo_url'  => 'https://placeholdit.imgix.net/~text?txt=Jim&txtsize=80&bg=eceff1&txtclr=607d8b&w=640&h=640', //'/profile_photos/jim.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $james->profile()->save($jamesProfile);

        // Steve's account
        $stephen = User::create([
            'name'       => 'Stephen Norris',
            'email'      => 'stephenmichaelnorris@gmail.com',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $stephenProfile = Profile::create([
            'user_id'    => $stephen->id,
            'photo_url'  => 'https://placeholdit.imgix.net/~text?txt=Steve&txtsize=80&bg=eceff1&txtclr=607d8b&w=640&h=640', //'/profile_photos/steve.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $stephen->profile()->save($stephenProfile);
    }
    
}