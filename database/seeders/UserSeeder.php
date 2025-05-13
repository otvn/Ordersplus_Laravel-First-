<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'password' => bcrypt('password123'),
        //     'phone' => '+1234567890',
        // ]);
    //      User::create([
    //     'name' => 'Jane Smith',
    //     'email' => 'jane@example.com',
    //     'password' => bcrypt('password456'),
    //     'phone' => '+1234567891',
    // ]);
    //      User::create([
    //     'name' => 'Jn Smith',
    //     'email' => 'jn@example.com',
    //     'password' => bcrypt('passord46'),
    //     'phone' => '+125457891',
    // ]);
    //      User::create([
    //     'name' => ' Smith',
    //     'email' => 'j@examle.com',
    //     'password' => bcrypt('pasord46'),
    //     'phone' => '+1547891',
    // ]);
         User::create([
        'name' => ' ith',
        'email' => 'j@exml.com',
        'password' => bcrypt('paord4'),
        'phone' => '+15781',
    ]);
    }
}
