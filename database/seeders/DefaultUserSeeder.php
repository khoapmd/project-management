<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('email', 'minhdangkhoa.phan@ttigroup.com.vn')->count() == 0) {
            $user = User::create([
                'name' => 'Zero Phan',
                'email' => 'minhdangkhoa.phan@ttigroup.com.vn',
                'password' => bcrypt('Passw@rd'),
                'email_verified_at' => now()
            ]);
            $user->creation_token = null;
            $user->save();
        }
    }
}
