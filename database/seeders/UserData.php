<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Owner',
                'username' => 'owner',
                'password' => bcrypt('12345678'),
                'level' =>1,
                'email' => 'owner@yogaprindavan.com'
            ],
            [
                'name' => 'Admisitrator',
                'username' => 'admin',
                'password' => bcrypt('12345678'),
                'level' => 2,
                'email' => 'admin@lorayang.com'
            ],
            [
                'name' => 'Divisi',
                'username' => 'divisi',
                'password' => bcrypt('12345678'),
                'level' => 3,
                'email' => 'divisi@tatausaha.com'
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
