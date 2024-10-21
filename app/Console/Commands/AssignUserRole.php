<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Role;

class AssignUserRole extends Command
{
    protected $signature = 'assign:role {userId} {roleId}';
    protected $description = 'Assign a role to a user';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $userId = $this->argument('userId');
        $roleId = $this->argument('roleId');

        $user = User::find($userId);
        $role = Role::find($roleId);

        $user->roles()->attach($role);

        $this->info('Role assigned successfully!');
    }
}
