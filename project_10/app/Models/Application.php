<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'company_name',
        'position',
        'application_date',
        'status',
        'notes',
        'cv_path'
    ];
}