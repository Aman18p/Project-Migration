<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function assignRole($userId, $roleId)
    {
        $user = User::find($userId);
        $role = Role::find($roleId);

        // Attach a single role to the user
        $user->roles()->attach($role);

        return "Role assigned successfully!";
    }

    public function assignMultipleRoles($userId, $roleIds)
    {
        $user = User::find($userId);

        // Attach multiple roles to the user
        $user->roles()->attach($roleIds);

        return "Multiple roles assigned successfully!";
    }
}