<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Relationship: A role may belong to many users.
     */
    public function users()
    {
        // If you have a custom pivot table, specify the table name here, e.g. 'user_role'
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    /**
     * Relationship: A role may have many permissions.
     */
    public function permissions()
    {
        // If you have a custom pivot table, specify the table name here, e.g. 'role_permission'
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }
}
