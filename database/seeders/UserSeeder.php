<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // Create user role entries
        $adminRole = Role::where('role_name', 'Admin')->first();
        $user = User::first(); // Fetch the first user from the database

        if ($adminRole && $user) {
            $user->roles()->attach($adminRole->id);
        }

        $nonAdminRoles = Role::where('role_name', '!=', 'Admin')->get();
        $nonAdminUsers = \App\Models\User::whereDoesntHave('roles', function ($query) {
            $query->where('role_name', 'Admin');
        })->get();

        foreach ($nonAdminUsers as $nonAdminUser) {
            $randomRoles = $nonAdminRoles->random(rand(1, 2))->pluck('id')->toArray();
            $nonAdminUser->roles()->attach($randomRoles);
        }
    }
}
