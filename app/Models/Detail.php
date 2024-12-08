<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = [
    "work_id",
    "company name",
    "location",
    "comment",
    "salary",
    "URL"
    ];
    public function work(){
        return $this->belongsTo(Work::class);
    }
}
