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
            'category_id' => fake()->numberBetween(1, 5),
            'course_name' => $name,
            'course_slug' => Str::slug($name),
            'course_picture' => 'https://picsum.photos/id/237/200/200',
            'course_desc' => fake()->paragraph(2, true),
            'course_price' => 100000,
            'admin_percentage' => $setting->presentase_admin,
            'teacher_percentage' => $setting->presentase_teacher,
            'affiliate_percentage' => $setting->presentase_affiliate,
        ];
    }
}
