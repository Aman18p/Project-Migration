<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project'; // Specify the table name if needed

    // Specify fillable fields for mass assignment
    protected $fillable = [
        'customer_id',
        'name',
        'start_date',
        'end_date',
        'progress',
    ];

    // Define relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // You can add other relationships or methods as needed
}
