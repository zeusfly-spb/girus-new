<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@girus.ru')->exists()) {
            $admin = User::create([
                'email' => 'admin@girus.ru',
                'name' => 'Admin',
                'password' => bcrypt('secret'),
            ]);
            $admin->assignRole('admin');
        }
        if (!User::where('email', 'test@localhost.ru')->exists()) {
            $salt = md5(now());
            User::create([
                'type' => 'seller',
                'email' => 'test@localhost.ru',
                'salt' => $salt,
                'password' => bcrypt('test1234567'),
                'email_verified_at' => null,
                'remember_token' => null,
                'ctime' => now(),
                'ltime' => now(),
                'mtime' => now(),
                'ecount' => 0,
                'status' => true,
                'name' => 'develop-seller',
                'phone' => '3333333333333',
                'msg_user' => 0,
                'msg_admin' => 0,
                'msg_total' => 0,
                'ord_count' => 0,
            ]);

        }

        if (!User::where('email', 'test1@localhost.ru')->exists()) {
            $salt = md5(now());
            User::create([
                'type' => 'partner',
                'email' => 'test1@localhost.ru',
                'salt' => $salt,
                'password' => bcrypt('test1234567'),
                'email_verified_at' => null,
                'remember_token' => null,
                'ctime' => now(),
                'ltime' => now(),
                'mtime' => now(),
                'ecount' => 0,
                'status' => true,
                'name' => 'develop-partner',
                'phone' => '222222222222',
                'msg_user' => 0,
                'msg_admin' => 0,
                'msg_total' => 0,
                'ord_count' => 0,
            ]);
        }

        if (!User::where('email', 'test2@localhost.ru')->exists()) {
            $salt = md5(now());
            User::create([
                'type' => 'client',
                'email' => 'test2@localhost.ru',
                'salt' => $salt,
                'password' => bcrypt('test1234567'),
                'email_verified_at' => null,
                'remember_token' => null,
                'ctime' => now(),
                'ltime' => now(),
                'mtime' => now(),
                'ecount' => 0,
                'status' => true,
                'name' => 'develop-client',
                'phone' => '111111111111',
                'msg_user' => 0,
                'msg_admin' => 0,
                'msg_total' => 0,
                'ord_count' => 0,
            ]);
        }
    }
}
