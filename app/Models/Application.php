<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\table;
class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        "category",
        "status",
    ];
    protected $table = "Applications";
}

