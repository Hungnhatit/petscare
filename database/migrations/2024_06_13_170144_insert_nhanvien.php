<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('NHANVIEN')->insert(
            [
                [
                    'MANV' => 'NV001',
                    'TENNV' => 'nguyennhathung',
                    'MATKHAU' => Hash::make('0000'), // bcrypt the password
                    'DIACHINV' => '123 Main St',
                    'SDT' => 1234567890,
                    'CCCD' => 123456789,
                    'GIOITINH' => 'M',
                    'NGAYSINH' => '1990-01-01'
                ],
                [
                    'MANV' => 'NV002',
                    'TENNV' => 'tranthimai',
                    'MATKHAU' => Hash::make('0000'),
                    'DIACHINV' => '456 Another St',
                    'SDT' => 1234567891,
                    'CCCD' => 123456788,
                    'GIOITINH' => 'F',
                    'NGAYSINH' => '1991-02-01',
                ],
                [
                    'MANV' => 'NV003',
                    'TENNV' => 'levanbinh',
                    'MATKHAU' => Hash::make('0000'),
                    'DIACHINV' => '789 Someplace Ave',
                    'SDT' => 1234567892,
                    'CCCD' => 123456787,
                    'GIOITINH' => 'M',
                    'NGAYSINH' => '1992-03-01',
                ],
                [
                    'MANV' => 'NV004',
                    'TENNV' => 'phamthihoa',
                    'MATKHAU' => Hash::make('0000'),
                    'DIACHINV' => '101 Anywhere Blvd',
                    'SDT' => 1234567893,
                    'CCCD' => 123456786,
                    'GIOITINH' => 'F',
                    'NGAYSINH' => '1993-04-01',
                ],
                [
                    'MANV' => 'NV005',
                    'TENNV' => 'doquangkhai',
                    'MATKHAU' => Hash::make('0000'),
                    'DIACHINV' => '202 Nowhere Rd',
                    'SDT' => 1234567894,
                    'CCCD' => 123456785,
                    'GIOITINH' => 'M',
                    'NGAYSINH' => '1994-05-01',
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
