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
        DB::table('TAIKHOANCH')->insert([
            'IDCH' => 'CH001',
            'TENDN' => 'cuahang01',
            'MATKHAU' => Hash::make('0000'), // bcrypt the password
            'EMAIL' => 'cuahang01@example.com',
            'TENCUAHANG' => 'Cửa hàng PetsCare',
            'SDT' => '0123456789',
            'DIACHI' => '123 Đường ABC',
            'TRANGTHAI' => 'Chờ duyệt',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
