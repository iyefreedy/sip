<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        //
        $user = new User();
        $user->username = "admin";
        $user->email = "iye.fredickson@gmail.com";
        $user->setPassword("admin");
        $user->active = 1;

        $usermodel = new UserModel();
        $usermodel->save($user);
    }
}
