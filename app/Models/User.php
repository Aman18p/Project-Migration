<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Fillable fields to allow mass assignment
    protected $fillable = ['name', 'email', 'password', 'department', 'service_provider_id'];

    // Define the many-to-many relationship with Role
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }
}
