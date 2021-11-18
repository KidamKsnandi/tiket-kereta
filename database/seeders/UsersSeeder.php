<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Kereta";
        $adminRole->save();

        $petugasRole = new Role;
        $petugasRole->name = "petugas";
        $petugasRole->display_name = "Petugas Kereta";
        $petugasRole->save();

        $memberRole = new Role;
        $memberRole->name = "member";
        $memberRole->display_name = "Seorang Member";
        $memberRole->save();

        // Membuat sample admin
        $admin = new User;
        $admin->name = "Admin Kidam";
        $admin->email = "kidam@gmail.com";
        $admin->password = bcrypt("kidam1234");
        $admin->save();
        $admin->attachRole($adminRole);

        $admin = new User;
        $admin->name = "Admin Akbar";
        $admin->email = "akbar@gmail.com";
        $admin->password = bcrypt("akbar1234");
        $admin->save();
        $admin->attachRole($adminRole);

        $petugas = new User;
        $petugas->name = "Petugas Kereta";
        $petugas->email = "petugas@gmail.com";
        $petugas->password = bcrypt("petugas1234");
        $petugas->save();
        $petugas->attachRole($petugasRole);
    }
}
