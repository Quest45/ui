<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $admin = User::create([
            'university' => 'UCAO',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), 
            'role' => 'admin'
        ]);

        $student = User::create([
            'university' => 'UCAO',
            'name' => 'student',
            'email' => 'student@student.com',
            'password' => Hash::make('password'),
            'role' => 'student'
        ]);

        $corporate = User::create([
            'university' => 'null',
            'name' => 'corporate',
            'email' => 'corporate@corporate.com',
            'password' => Hash::make('password'),
            'role' => 'corporate'
        ]);
    }
}
