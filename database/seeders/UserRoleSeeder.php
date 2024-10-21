<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        // Seed user data with department field
        $user = User::create([
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
            'department' => 'IT', // Department value added
            'service_provider_id' => 1, // Also ensure this field is filled if it's mandatory
        ]);

        $role = Role::find(2);

        // Attach a role to the user
        $user->roles()->attach($role);

        // Attach multiple roles to the user
        $user->roles()->attach([1, 2, 3]);
    }
}
