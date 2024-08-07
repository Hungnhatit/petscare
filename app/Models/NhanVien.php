<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Authenticatable
{
    use HasFactory;
    protected $table = 'NHANVIEN';
    protected $fillable = [
        'TENNV', 'MATKHAU',
    ];
    protected $hidden = [
        'MATKHAU', 'remember_token',
    ];


    public function getAuthPassword()
    {
        return $this->MATKHAU;
    }

    public function getAuthIdentifierName()
    {
        return 'TENNV';
    }
}
