<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Category;
use App\Models\CourseAcces;
use App\Models\ListCourse;
use App\Models\SubCourse;
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
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
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
            'name' => 'user',
            'username' => 'user1',
            'email' => 'user1@gmail.com',
            'email_verified_at' => now(),
            'wa_number' => '6281234354675',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => 'USER',
            'affiliate_id' => 1,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'username' => 'user2',
            'email' => 'user2@gmail.com',
            'email_verified_at' => now(),
            'wa_number' => '6281234354675',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => 'USER',
            'affiliate_id' => 2 ,
        ]);
        Wallet::factory(4)->create();

        \App\Models\Setting::factory()->create([
            'default_affiliate' => 1,
            'hero_image' => 'upload/home/hero_image.jpg'
        ]);
        Course::factory(2)->create();
        Category::factory()->create();
        Teacher::factory()->create([
            'id' => 2,
            'teacher_tag' => 'Time To Operating The System',
            'teacher_bio' => fake()->paragraph(6, true),
        ]);
        CourseAcces::factory()->create([
            'course_id' => 1,
            'user_id' => 3,
            'course_acces_last' => 5,
        ]);
        SubCourse::factory(10)->create();
        ListCourse::factory(20)->create();

    }
}
