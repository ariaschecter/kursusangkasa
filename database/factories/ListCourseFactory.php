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
            'list_course_slug' => Str::random(14),
            'course_id' => 1,
            'sub_course_id' => fake()->numberBetween(0, 5),
            'list_course_name' => fake()->name(),
            'list_course_link' => 'https://www.youtube.com/watch?v=WW0ncSSTtwo',
        ];
    }
}
