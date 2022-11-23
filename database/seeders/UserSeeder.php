<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
// use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
// use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;


date_default_timezone_set("Asia/Jakarta");

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'name' => 'Admin',
            'nik' => '3173087626743672',
            'address' => 'Jl. Mencintaimu No.2 Kampung Gaga',
            'provinsi' => '31',
            'kabupaten' => '3174',
            'kecamatan' => '3174080',
            'email' => 'admin@kopti.com',
            'phone' => '081278238080',
            'rekening_type' => '2',
            'rekening' => '5373893839',
            'gender' => '1',
            'postal_code' => '78456',
            'role' => '1',
            'avatar' => '/images/default-avatar.svg',
            'password' => Hash::make('admin123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}