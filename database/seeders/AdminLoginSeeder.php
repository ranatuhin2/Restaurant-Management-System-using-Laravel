<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $user = new User();
        $user->name = 'John Doe';
        $user->slug_name ='john';
        // $user->slug_name= Str::slug('John Doe');
        $user->profile_picture = 'user.jpg';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123456');
        $user->user_type = 'Admin';
        $user->save();
    }
}
