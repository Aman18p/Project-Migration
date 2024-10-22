<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRequest extends Model
{
    use HasFactory;

    protected $table = 'chatrequest'; // Specify the table name if it's not plural

    // Specify fillable fields for mass assignment
    protected $fillable = [
        'customer_id',
        'user_id',
        'status',
        'chat_content',
    ];

    // Define relationships if needed
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

