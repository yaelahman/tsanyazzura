<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 1
        ]);


        DB::table('settings')->insert([
            'name' => 'title',
            'title' => 'Title',
            'text' => 'Tsany Azzura'
        ]);

        DB::table('settings')->insert([
            'name' => 'facebook',
            'title' => 'Link Facebook',
            'text' => 'https://www.facebook.com/'
        ]);

        DB::table('settings')->insert([
            'name' => 'instagram',
            'title' => 'Link Instagram',
            'text' => 'https://www.instagram.com/'
        ]);

        DB::table('settings')->insert([
            'name' => 'linkedin',
            'title' => 'Link Linkedin',
            'text' => 'https://www.linkedin.com/'
        ]);

        DB::table('settings')->insert([
            'name' => 'whatsapp',
            'title' => 'No WhatsApp',
            'text' => '085702202129'
        ]);

        DB::table('settings')->insert([
            'name' => 'foto_utama',
            'title' => 'Foto Utama',
            'text' => 'img',
            'type' => 'file'
        ]);

        DB::table('settings')->insert([
            'name' => 'deskripsi',
            'title' => 'Deskripsi',
            'text' => 'img',
            'type' => 'textarea'
        ]);
    }
}
