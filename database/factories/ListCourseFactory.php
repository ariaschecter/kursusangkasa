<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListCourse>
 */
class ListCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'list_course_slug' => uniqid(),
            'course_id' => fake()->numberBetween(1,2),
            'sub_course_id' => fake()->numberBetween(0, 5),
            'list_course_name' => fake()->name(),
            'list_course_link' => 'tkdl6RptA0U',
            // https://www.youtube.com/watch?v=tkdl6RptA0U
        ];
    }
}
