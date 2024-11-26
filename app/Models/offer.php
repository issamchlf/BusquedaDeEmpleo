<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class offer extends Model
{
    use HasFactory;
    protected $fillable = [
    "company name",
    "location",
    "comment",
    "salary"
    ];
}
