<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Category;
use App\Models\Teacher;
use App\Models\Wallet;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'Aria Maulana',
            'username' => 'acielana',
            'email' => 'acielana@gmail.com',
            'email_verified_at' => now(),
            'wa_number' => '6281234354675',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => 'ADMIN',
            'affiliate_id' => 1,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Teacher',
            'username' => 'teacher',
            'email' => 'teacher@gmail.com',
            'email_verified_at' => now(),
            'wa_number' => '6281234354675',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => 'TEACHER',
            'affiliate_id' => 1,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Aria Maulana',
            'username' => 'email1',
            'email' => 'email1@gmail.com',
            'email_verified_at' => now(),
            'wa_number' => '6281234354675',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => 'USER',
            'affiliate_id' => 1,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Aria Maulana',
            'username' => 'email2',
            'email' => 'email2@gmail.com',
            'email_verified_at' => now(),
            'wa_number' => '6281234354675',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => 'USER',
            'affiliate_id' => 2 ,
        ]);
        Wallet::factory(3)->create();

        \App\Models\Setting::factory()->create([
            'default_affiliate' => 1,
            'hero_image' => 'upload/home/hero_image.jpg'
        ]);
        Course::factory(20)->create();
        Category::factory(6)->create();
        Teacher::factory()->create([
            'id' => 2,
            'teacher_tag' => 'Time To Operating The System',
            'teacher_bio' => fake()->paragraph(6, true),
        ]);


    }
}
