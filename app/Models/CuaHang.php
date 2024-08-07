<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class CuaHang extends Authenticatable
{
    use HasFactory;
    protected $table = 'TAIKHOANCH';
    protected $fillable = [
        'TENCH', 'MATKHAU', 'EMAIL', 'TENCUAHANG', 'SDT', 'DIACHI', 'TRANGTHAI',
    ];
    protected $primaryKey = "IDCH";
    protected $hidden = [
        'MATKHAU', 'remember_token',
    ];

    public $incrementing = false;
    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->MATKHAU;
    }

    public function getAuthIdentifierName()
    {
        return 'TENCH';
    }
}
