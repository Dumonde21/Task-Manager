<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Kini nag-allow nato nga i-save kining mga fields sa database
    protected $fillable = ['task_name', 'description', 'status', 'due_date'];
}