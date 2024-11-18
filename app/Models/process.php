<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class process extends Model
{
    use HasFactory;

    protected $table = "process";
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected $fillable = ["command", "pid"];
}
