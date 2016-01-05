<?php

use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker            = Faker::create('en_US');

        /*
         * Base User Accounts
         */

        // Mike's account
        $michael = User::create([
            'name'       => 'Michael Norris',
            'email'      => 'mstnorris@gmail.com',
            'password'   => bcrypt('password'),
            'must_reset_password' => false,
            'verify_token' => null,
            'verified_on' => Carbon::now(),
            'active_on' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $michaelProfile = Profile::create([
            'user_id'                        => $michael->id,
            'username'                       => 'mstnorris',
            'salutation'                     => 'Mr',
            'first_name'                     => 'Michael',
            'middle_name'                    => 'Stephen Thomas',
            'last_name'                      => 'Norris',
            'nick_name'                      => 'Mike',
            'date_of_birth'                  => '1988-08-17',
            'address_line_1'                 => '78A Sackville Road',
            'address_line_2'                 => '',
            'address_line_3'                 => '',
            'address_line_4'                 => '',
            'address_city'                   => 'Hove',
            'address_county'                 => 'East Sussex',
            'address_postcode'               => 'BN3 3HB',
            'private_email_address'          => 'mstnorris@gmail.com',
            'mobile_number'                  => '+44 (0) 7446 990 061',
            'twitter_username'               => 'mstnorris',
            'facebook_username'              => 'mstnorris',
            'google_plus_username'           => 'mstnorris',
            'instagram_username'             => 'mstnorris',
            'profile_photo_url'              => '/images/mike.jpg', //'/images/mike.jpg',
            'created_at'                     => Carbon::now(),
            'updated_at'                     => Carbon::now()
        ]);

        $michael->profile()->save($michaelProfile);

        // Sezer's account
        $sezer = User::create([
            'name'       => 'Sezer Tunca',
            'email'      => 'sezertunca@gmail.com',
            'password'   => bcrypt('password'),
            'must_reset_password' => false,
            'verify_token' => null,
            'verified_on' => Carbon::now(),
            'active_on' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $sezerProfile = Profile::create([
            'user_id'                        => $sezer->id,
            'username'                       => 'sezertunca',
            'salutation'                     => 'Mr',
            'first_name'                     => 'Sezer',
            'middle_name'                    => '',
            'last_name'                      => 'Tunca',
            'nick_name'                      => 'Sezer',
            'date_of_birth'                  => '1989-05-02',
            'address_line_1'                 => 'Flat 4',
            'address_line_2'                 => '15 Burlington Street',
            'address_line_3'                 => '',
            'address_line_4'                 => '',
            'address_city'                   => 'Brighton',
            'address_county'                 => 'East Sussex',
            'address_postcode'               => 'BN2 1AA',
            'private_email_address'          => 'sezertunca@gmail.com',
            'mobile_number'                  => '+44 (0) 7545 278 156',
            'twitter_username'               => 'sezertunca',
            'facebook_username'              => 'sezertunca',
            'google_plus_username'           => 'sezertunca',
            'instagram_username'             => 'sezertunca',
            'profile_photo_url'              => '/images/sezer.jpg',
            'created_at'                     => Carbon::now(),
            'updated_at'                     => Carbon::now()
        ]);

        $sezer->profile()->save($sezerProfile);

        // Holly's account
        $holly = User::create([
            'name'       => 'Holly McNicol',
            'email'      => 'holly.mcnicol@live.co.uk',
            'password'   => bcrypt('password'),
            'must_reset_password' => false,
            'verify_token' => null,
            'verified_on' => Carbon::now(),
            'active_on' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $hollyProfile = Profile::create([
            'user_id'                        => $holly->id,
            'username'                       => 'hjmcnicol',
            'salutation'                     => 'Miss',
            'first_name'                     => 'Holly',
            'middle_name'                    => 'Jane',
            'last_name'                      => 'McNicol',
            'nick_name'                      => 'Holly',
            'date_of_birth'                  => '1990-05-16',
            'address_line_1'                 => '78A Sackville Road',
            'address_line_2'                 => '',
            'address_line_3'                 => '',
            'address_line_4'                 => '',
            'address_city'                   => 'Hove',
            'address_county'                 => 'East Sussex',
            'address_postcode'               => 'BN3 3HB',
            'private_email_address'          => 'holly.mcnicol@live.co.uk',
            'mobile_number'                  => '+44 (0) 7950 994 570',
            'twitter_username'               => 'hjmcnicol',
            'facebook_username'              => 'hjmcnicol',
            'google_plus_username'           => 'hjmcnicol',
            'instagram_username'             => 'hjmcnicol',
            'profile_photo_url'              => '/images/holly.jpg',
            'created_at'                     => Carbon::now(),
            'updated_at'                     => Carbon::now()
        ]);

        $holly->profile()->save($hollyProfile);

        // Jane's account
        $jane = User::create([
            'name'       => 'Jane Challenger-Gillitt',
            'email'      => 'j.m.challenger-gillitt@brighton.ac.uk',
            'password'   => bcrypt('password'),
            'must_reset_password' => false,
            'verify_token' => null,
            'verified_on' => Carbon::now(),
            'active_on' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $janeProfile = Profile::create([
            'user_id'                        => $jane->id,
            'username'                       => 'jmchallengergillitt',
            'salutation'                     => 'Mrs',
            'first_name'                     => 'Jane',
            'middle_name'                    => '',
            'last_name'                      => 'Challenger-Gillitt',
            'nick_name'                      => 'Jane',
            'date_of_birth'                  => '1980-01-01',
            'address_line_1'                 => '1 Hove Road',
            'address_line_2'                 => '',
            'address_line_3'                 => '',
            'address_line_4'                 => '',
            'address_city'                   => 'Hove',
            'address_county'                 => 'East Sussex',
            'address_postcode'               => 'BN3 3BN',
            'private_email_address'          => 'jane.challenger-gillitt@gmail.com',
            'mobile_number'                  => '+44 (0) 7987 654 321',
            'twitter_username'               => 'jmchallengergillitt',
            'facebook_username'              => 'jmchallengergillitt',
            'google_plus_username'           => 'jmchallengergillitt',
            'instagram_username'             => 'jmchallengergillitt',
            'profile_photo_url'              => 'https://placeholdit.imgix.net/~text?txt=JCG&txtsize=80&bg=eceff1&txtclr=607d8b&w=640&h=640',
            'created_at'                     => Carbon::now(),
            'updated_at'                     => Carbon::now()
        ]);

        $jane->profile()->save($janeProfile);

        // Super Administrator (User)
        $superU = User::create([
            'name'       => 'Super Administrator',
            'email'      => 'super@getwhiteboard.com',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $superUProfile = Profile::create([
            'user_id'                        => $superU->id,
            'username'                       => 'superadmin',
            'salutation'                     => 'Mr',
            'first_name'                     => 'Super',
            'middle_name'                    => '',
            'last_name'                      => 'Administrator',
            'nick_name'                      => 'SuperAdmin',
            'date_of_birth'                  => '1980-01-01',
            'address_line_1'                 => 'Address line 1',
            'address_line_2'                 => '',
            'address_line_3'                 => '',
            'address_line_4'                 => '',
            'address_city'                   => 'Hove',
            'address_county'                 => 'East Sussex',
            'address_postcode'               => 'BN3 3HB',
            'private_email_address'          => 'superadmin@contest.dev',
            'mobile_number'                  => '+44 (0) 7950 994 570',
            'twitter_username'               => 'superadmin',
            'facebook_username'              => 'superadmin',
            'google_plus_username'           => 'superadmin',
            'instagram_username'             => 'superadmin',
            'profile_photo_url'              => 'https://placeholdit.imgix.net/~text?txt=SUP&txtsize=80&bg=eceff1&txtclr=607d8b&w=640&h=640',
            'created_at'                     => Carbon::now(),
            'updated_at'                     => Carbon::now()
        ]);

        $superU->profile()->save($superUProfile);

        // Administrator (User)
        $adminU = User::create([
            'name'       => 'Administrator',
            'email'      => 'admin@getwhiteboard.com',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $adminUProfile = Profile::create([
            'user_id'                        => $adminU->id,
            'username'                       => 'admin',
            'salutation'                     => 'Mr',
            'first_name'                     => 'Admin',
            'middle_name'                    => '',
            'last_name'                      => 'Istrator',
            'nick_name'                      => 'Admin',
            'date_of_birth'                  => '1990-05-16',
            'address_line_1'                 => '78A Sackville Road',
            'address_line_2'                 => '',
            'address_line_3'                 => '',
            'address_line_4'                 => '',
            'address_city'                   => 'Hove',
            'address_county'                 => 'East Sussex',
            'address_postcode'               => 'BN3 3HB',
            'private_email_address'          => 'admin@contest.dev',
            'mobile_number'                  => '+44 (0) 7950 994 570',
            'twitter_username'               => 'admin',
            'facebook_username'              => 'admin',
            'google_plus_username'           => 'admin',
            'instagram_username'             => 'admin',
            'profile_photo_url'              => 'https://placeholdit.imgix.net/~text?txt=ADM&txtsize=90&bg=eceff1&txtclr=607d8b&w=640&h=640',
            'created_at'                     => Carbon::now(),
            'updated_at'                     => Carbon::now()
        ]);

        $adminU->profile()->save($adminUProfile);

        // Super Administrator (Role)
        $superR = Role::create([
            'name'       => 'super-admin',
            'label'       => 'Super Administrator'
        ]);

        // Administrator (Role)
        $adminR = Role::create([
            'name'       => 'admin',
            'label'       => 'Administrator'
        ]);

        // Student (Role)
        $studentR = Role::create([
            'name'       => 'student',
            'label'       => 'Student'
        ]);

        //create 20 users
        foreach (range(1, 20) as $index) {
            $user_wbid  = str_random(16);
            $user_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
            $user_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $user_updated_at);
            $user_name = $faker->firstName;
            $user_username = strtolower($user_name . $faker->lastName);
            $user_email = $user_username . $faker->companyEmail;
            $user_dob = $faker->dateTimeBetween($startDate = '-25 years', $endDate = '-18 years');
            $user = User::create([
                'wbid'      => $user_wbid,
                'name'       => $user_name,
                'dob'        => $user_dob,
                'email'      => $user_email,
                'username'   => $user_username,
                'password'   => bcrypt('password'),
                'key'        => str_random(11),
                'confirmed'  => $faker->boolean(),
                'created_at' => $user_created_at,
                'updated_at' => $user_updated_at
            ]);
            $user->roles()->attach($studentR);
        }

        $michael->roles()->attach($studentR);
        $sezer->roles()->attach($studentR);
        $holly->roles()->attach($studentR);

        $superU->roles()->attach($superR);
        $adminU->roles()->attach($adminR);

        $michael->roles()->attach($superR);
        $sezer->roles()->attach($superR);
        $michael->roles()->attach($adminR);
        $sezer->roles()->attach($adminR);

        $jane->roles()->attach($adminR);
    }
}