<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer'; // Specify the table name if it's not plural

    // Specify fillable fields for mass assignment
    protected $fillable = [
        'name',
        'email',
        'contact_info',
        'preferences',
        'churn_probability',
    ];

    // Casts
    protected $casts = [
        'preferences' => 'array', // Cast JSON to array
    ];

    // Define relationships if needed
    public function chatRequests()
    {
        return $this->hasMany(ChatRequest::class);
    }

    public function callRequests()
    {
        return $this->hasMany(CallRequest::class);
    }

    // Add other relationships as needed
}
