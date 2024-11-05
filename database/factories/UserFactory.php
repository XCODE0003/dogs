<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $role = ['user', 'admin'];

        return [
            'first_name' => fake()->unique()->firstName(),
            'second_name' => fake()->unique()->lastName(),

            'role' => $role[array_rand($role, 1)],
            'email' => fake()->unique()->email(),
            'email_verified_at' => now(),

            'password' => Hash::make('admin'),

            'remember_token' => Str::random(10),
            'created_at' => fake()->unique()->dateTimeBetween(Carbon::now()->startOfYear(), 'now'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
