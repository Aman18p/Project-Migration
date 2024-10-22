<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginReport extends Model
{
    use HasFactory;

    protected $table = 'loginreport'; // Specify the table name if it's not plural

    // Specify fillable fields if you're using mass assignment
    protected $fillable = [
        'user_id',
        'login_date',
        'login_time',
        'logout_time',
        'total_hours',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
