<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'root',
            'email' => 'root-dev@suyab.local',
            'pin' => '111112',
            'address' => 'Jalan Jendral A. Yani, Bedungkul',
            'phone_number' => '098212341234',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'support',
            'email' => 'support@suyab.local',
            'pin' => '111113',
            'address' => 'Jalan Jendral A. Yani, Bali',
            'phone_number' => '098212341230',
            'password' => bcrypt('support'),
        ]);

        User::create([
            'name' => 'rio',
            'email' => 'rio@suyab.local',
            'pin' => '111114',
            'address' => 'Jalan Jendral A. Yani, Yogayakarta',
            'phone_number' => '04459385323',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'staff',
            'email' => 'staff@suyab.local',
            'pin' => '111115',
            'address' => 'Jalan Jendral A. Yani, Kebumen',
            'phone_number' => '04459385325',
            'password' => bcrypt('monkey'),
        ]);

        User::create([
            'name' => 'ashley',
            'email' => 'ashley@suyab.local',
            'pin' => '111116',
            'address' => 'Jalan Jendral A. Yani, Kalimantan',
            'phone_number' => '08723456981',
            'password' => bcrypt('iloveu'),
        ]);
    }
}
