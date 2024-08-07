<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'ADMINISTRATOR';
    protected $fillable = [
        'USERNAME', 'PASSWORD',
    ];
    protected $hidden = [
        'PASSWORD', 'remember_token',
    ];


    public function getAuthPassword()
    {
        return $this->PASSWORD;
    }

    public function getAuthIdentifierName()
    {
        return 'USERNAME';
    }
}
