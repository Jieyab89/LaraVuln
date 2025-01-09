<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['name' => 'super admin']);
        Role::firstOrCreate(['name' => 'admin']);
        
        $superadmin = User::create([
            'name' => 'Suyabbooo',
            'email' => 'superadmin@suyab.local',
            'pin' => '12345',
            'address' => 'Jalan Jendral A. Yani, Bekasi',
            'phone_number' => '0812345678912',
            'password' => bcrypt('jimalutu1234#')
        ]);

        $superadmin->assignRole('super admin');

        $admin = User::create([
            'name' => 'Suyabbooo 2',
            'email' => 'admin@suyab.local',
            'pin' => '111111',
            'address' => 'Jalan Jendral A. Yani, Bandung',
            'phone_number' => '098212341231',
            'password' => bcrypt('jimalutu1234#123')
        ]);
        
        $admin->assignRole('admin');
    }
}
