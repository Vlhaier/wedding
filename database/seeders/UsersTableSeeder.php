<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cu7k0vwAt0DeVK4CcF.1ruOn8ULnv75fhBkqXbPu5jSCnpgXPK.vK',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2022-07-19 00:32:25',
                'updated_at' => '2022-07-25 18:54:47',
                'uuid' => '8402e153-54aa-498a-a20a-b0dc9e77f65c',
                'companion' => 0,
                'godfather' => 0,
                'attend' => 1,
                'deleted_at' => NULL,
                'heading' => NULL,
                'username' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'asd',
                'email' => 'mruiz@datacreativa.rocks',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/ATGE8zWEghGy/9.QRnKdeA7oT/eoXju5v.5.yiB6/jsn1nyhGTxe',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2022-07-19 00:44:57',
                'updated_at' => '2022-07-25 19:13:45',
                'uuid' => '9102e153-54aa-498a-a20a-b0dc9e77f65c',
                'companion' => 3,
                'godfather' => 1,
                'attend' => 1,
                'deleted_at' => NULL,
                'heading' => NULL,
                'username' => 'asd',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'lkj',
                'email' => 'lkj@asd.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JtAmOjVYmmaPzAWq9NRhKuA6/0aqYb2XGv483c1hby/LvsHGHjbP.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2022-07-25 19:25:26',
                'updated_at' => '2022-07-25 19:25:26',
                'uuid' => '22c63e4a-87aa-4b2f-a7a3-3c9eb466e745',
                'companion' => 2,
                'godfather' => 0,
                'attend' => 1,
                'deleted_at' => NULL,
                'heading' => NULL,
                'username' => 'lkj',
            ),
        ));
        
        
    }
}