<?php

namespace Database\Seeders;

use App\Models\Id;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();;
        $authSalt = 'ahXahH!ue8oegie2.#Thailahv2te%quaiQuahjeo8x-eipha@@3Zahxoi9!FahGhier';
        $salt = md5(now());
        $id = DB::table('ids')->where('name', 'user')->value('value') + 1 ?? 0;
        if (!User::where('email', 'test-seller@localhost.ru')->exists()) {
            $user_id = $users->random()->id;
            User::create([
                'type' => 'seller',
                'email' => 'test-seller@localhost.ru',
                'salt' => $salt,
                'password' => bcrypt('test1234567'),
                'ctime' => now(),
                'ltime' => now(),
                'mtime' => now(),
                'ecount' => 0,
                'status' => true,
                'name' => 'develop-seller',
                'phone' => '111111111111',
                'msg_user' => 0,
                'msg_admin' => 0,
                'msg_total' => 0,
                'ord_count' => 0,
                'user_id' => $user_id
            ]);
            Seller::create([
                'id' => $id,
                'inn' => '1234512345',
                'orgname' => 'develop seller',
                'user_id' => $user_id
            ]);
            Id::create(
                ['name' => 'user'],
                ['value' => $id]
            );
        }

    }
}
