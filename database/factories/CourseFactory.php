<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $setting = Setting::first();
        $name = fake()->name();
        return [
            'teacher_id' => 2,
            // 'category_id' => fake()->numberBetween(1, 6),
            'category_id' => 1,
            'course_name' => $name,
            'course_slug' => Str::slug($name),
            'course_picture' => 'upload/course/course.jpg',
            'course_desc' => fake()->paragraph(2, true),
            'price_old' => 100000,
            'price_new' => 50000,
            'admin_percentage' => $setting->presentase_admin,
            'teacher_percentage' => $setting->presentase_teacher,
            'affiliate_percentage' => $setting->presentase_affiliate,
            'course_enroll' => fake()->numberBetween(300, 1000),
        ];
    }
}
