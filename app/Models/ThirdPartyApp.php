<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdPartyApp extends Model
{
    use HasFactory;

    protected $table = 'thirdpartyapp'; // Specify the table name if it's not plural

    // Specify fillable fields for mass assignment
    protected $fillable = [
        'name',
        'api_key',
        'permissions',
    ];

    // Casts
    protected $casts = [
        'permissions' => 'array', // Cast JSON to array
    ];

    // Define relationships if needed
    // For example, if this app has users or other relations, define them here.
}
