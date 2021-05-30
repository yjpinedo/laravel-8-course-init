<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function roleStore()
    {
        $roles = [
            [
                'name' => 'Admin',
                'description' => 'This rol admin',
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Editor',
                'description' => 'This rol editor',
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Author',
                'description' => 'This rol author',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Contributor',
                'description' => 'This rol contributor',
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Subscribers',
                'description' => 'This rol subscriber',
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ];

        Role::insert($roles);

        return 'Role are created successfully!';
    }

    public function userStore()
    {
        $users = [
            [
                'name' => 'Yeimer Pinedo',
                'email' => 'yeimer@mail.com',
                'password' => bcrypt('secret'),
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Daniela Rosado',
                'email' => 'daniela@mail.com',
                'password' => bcrypt('secret'),
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Alejandro Cantillo',
                'email' => 'alejandro@mail.com',
                'password' => bcrypt('secret'),
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Berta Castro',
                'email' => 'berta@mail.com',
                'password' => bcrypt('secret'),
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Nancy Peinado',
                'email' => 'nancy@mail.com',
                'password' => bcrypt('secret'),
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Carlos Rosado',
                'email' => 'carlos@mail.com',
                'password' => bcrypt('secret'),
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Carlos Andres Rosado',
                'email' => 'carlos-andres@mail.com',
                'password' => bcrypt('secret'),
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'Ronal Rosado',
                'email' => 'ronal@mail.com',
                'password' => bcrypt('secret'),
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ];

        User::insert($users);

        return 'User are created successfully!';
    }

    public function roleUserStore($id)
    {
        $user = User::findOrFail($id);
        $user->roles()->attach([2,3,4,5]);
        return 'User asigned role successfully!';
    }

    public function getRoleUser($id)
    {
        $roles = User::findOrfail($id)->roles;
        return $roles;
    }

    public function getUserRole($id)
    {
        $users = Role::findOrfail($id)->users;
        return $users;
    }
}
