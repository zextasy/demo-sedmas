<?php

namespace Database\Seeders;

use App\Models\BusinessGroup;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rootBusinessGroup = BusinessGroup::root();
        $abujaBusinessGroup = BusinessGroup::create([
            'name' => 'Abuja',
            'description' => 'Abuja',
            'parent_id' => $rootBusinessGroup->id,
        ]);
        $lagosBusinessGroup = BusinessGroup::create([
            'name' => 'Lagos',
            'description' => 'Lagos',
            'parent_id' => $rootBusinessGroup->id,
        ]);
        $admin = User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'emeka@Sedmas.com',
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $rootBusinessGroup->id,
        ]);
        $admin->assignRole('admin');

        $manager = User::firstOrCreate([
            'name' => 'ORJI CHUKWUDI',
            'email' => 'c.orji@Sedmas.com',
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $abujaBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'CHUKWUMA GIFT NWADIUTO',
            'email' => 'g.chukwuma@Sedmas.com',
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $abujaBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'Lagos Office',
            'email' => 'lag@Sedmas.com',
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $abujaBusinessGroup->id,
        ]);
        $manager->assignRole('editor');

        $manager = User::firstOrCreate([
            'name' => ' OSAZUWA GILBERT IMAFIDON',
            'email' => 'o.imafidon@Sedmas.com', //no recognised email address
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $abujaBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'AYEKE JENNIFER',
            'email' => 'j.ayeke@Sedmas.com', //no recognised email address
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $abujaBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'CHISOM OZOH',
            'email' => 'c.ozoh@Sedmas.com', //no recognised email address
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $abujaBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'JEROME JULIUS NDZEMBUIN',
            'email' => 'j.ndzembuin@Sedmas.com', //no recognised email address
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $abujaBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'NDUBUISI EMMANUEL EZEBUIHE',
            'email' => 'n.ezebuihe@Sedmas.com', //no recognised email address
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $abujaBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'OKECHUKWU CHINEDU JOSEPH',
            'email' => 'o.joseph@Sedmas.com',
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $abujaBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'EGBEJALE JOY',
            'email' => 'j.egbejale@Sedmas.com',
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $lagosBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'NWAJIAKU GODIAN C',
            'email' => 'g.nwajiaku@Sedmas.com',
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $lagosBusinessGroup->id,
        ]);
        $manager->assignRole('manager');

        $manager = User::firstOrCreate([
            'name' => 'MAHMUD MARYAM',
            'email' => 'm.mahmud@Sedmas.com',
            'password' => bcrypt(DatabaseSeeder::DEFAULT_PASSWORD),
            'email_verified_at' => now(),
            'business_group_id' => $lagosBusinessGroup->id,
        ]);
        $manager->assignRole('manager');
    }
}
