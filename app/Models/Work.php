<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
        "job_title",
        "category",
        "status",
    ];
    public function details(){
        return $this->hasMany(Detail::class);
    }
}
