<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breaklog extends Model
{
    use HasFactory;

    protected $table = 'breaklog'; // Specify the table name if it's not plural

    // Specify fillable fields if you're using mass assignment
    protected $fillable = [
        'user_id',
        'break_date',
        'break_start_time',
        'break_end_time',
        'total_break_minutes',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
