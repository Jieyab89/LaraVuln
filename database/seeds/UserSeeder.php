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
        $superadmin = User::create
        ([
            'name' =>'Suyabbooo',
            'email' =>'superadmin@suyab.local',
            'pin' => '12345',
            'address' => 'Jalan Jendral A. Yani, Bekasi',
            'phone_number' => '0812345678912',
            'password' =>bcrypt('jimalutu1234#')
        ]);
            
        $superadmin->assignRole('superadmin');
        $admin = User::create
        ([
            'name' =>'Suyabbooo 2',
            'email' =>'admin@suyab.local',
            'password' =>bcrypt('jimalutu1234#123')
        ]);
            
        $user->assignRole('user');
    }
}
