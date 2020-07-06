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
        DB::table('role_user')->truncate();

        $admin = User::create([
            'university' => 'UCAO',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $student = User::create([
            'university' => 'UCAO',
            'name' => 'student',
            'email' => 'student@student.com',
            'password' => Hash::make('password')
        ]);

        $corporate = User::create([
            'name' => 'corporate',
            'email' => 'corporate@corporate.com',
            'password' => Hash::make('password')
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $studentRole = Role::where('name', 'student')->first();
        $corporateRole = Role::where('name', 'corporate')->first();

        $admin->roles()->attach($adminRole);
        $student->roles()->attach($studentRole);
        $corporate->roles()->attach($corporateRole);
    }
}
