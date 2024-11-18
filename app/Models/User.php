<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{

    use SoftDeletes;

    protected $table = "users";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $softDeletes = "true";
    public $timestamps = "true";
    public $incrementing = "true";

    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'token',
        'resetToken_expires_at'
    ];
}

