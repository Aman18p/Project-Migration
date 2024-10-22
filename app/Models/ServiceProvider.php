<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    /**
     * Relationship: A service provider can have many users.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
