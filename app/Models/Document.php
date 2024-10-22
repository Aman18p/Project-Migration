<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'document'; // Specify the table name if it's not plural

    // Specify fillable fields for mass assignment
    protected $fillable = [
        'customer_id',
        'name',
        'type',
        'file_path',
    ];

    // Define the relationship with the Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
