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
            'name' =>'Super Admin Role',
            'email' =>'superadmin@suyab.local',
            'password' =>bcrypt('12345678')
        ]);
            
        $superadmin->assignRole('superadmin');
        $admin = User::create
        ([
            'name' =>'Admin Role',
            'email' =>'admin@suyab.local',
            'password' =>bcrypt('12345678')
        ]);
            
        $user->assignRole('user');
    }
}
