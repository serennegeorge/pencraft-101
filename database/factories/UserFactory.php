<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('Password1'),
            'profile' => $this->randomImage(),
            'bio' => fake()->realText(100),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function randomImage()
    {
        $images = [
            'images/profiles/alexander-hipp-iEEBWgY_6lA-unsplash.jpg',
            'images/profiles/cesar-rincon-XHVpWcr5grQ-unsplash.jpg',
            'images/profiles/etty-fidele-UBJsHb3HLv8-unsplash.jpg',
            'images/profiles/harps-joseph-tAvpDE7fXgY-unsplash.jpg',
            'images/profiles/jason-moyer-A73ah5JKtVA-unsplash.jpg',
            'images/profiles/jurica-koletic-7YVZYZeITc8-unsplash.jpg',
            'images/profiles/nicolas-horn-MTZTGvDsHFY-unsplash.jpg',
            'images/profiles/ryan-hoffman-Ft4p5E9HjTQ-unsplash.jpg',
        ];

        // Select a random index from the array
        $randomIndex = array_rand($images);

        // Retrieve the value corresponding to the random index
        $randomValue = $images[$randomIndex];

        return $randomValue;
    }
}