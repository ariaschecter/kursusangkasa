<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCourse>
 */
class SubCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_id' => fake()->numberBetween(1,2),
            'sub_course_slug' => Str::random(14),
            'sub_course_no' => fake()->numberBetween(0, 6),
            'sub_course_name' => fake()->name(),
        ];
    }
}
