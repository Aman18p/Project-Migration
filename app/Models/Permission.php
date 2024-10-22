<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Add relationships here if required in future, for example, role-permission relationship
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
