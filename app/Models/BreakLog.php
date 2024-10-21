<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakLog extends Model
{
    protected $fillable = ['user_id', 'break_date', 'break_start_time', 'break_end_time', 'total_break_minutes'];
}
