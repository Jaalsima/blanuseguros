<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

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
    public function definition(): array
    {
        return [
            'document'                  => Str::random(10),
            'name'                      => fake('es_ES')->name(),
            'email'                     => fake('es_ES')->unique()->safeEmail(),
            'email_verified_at'         => now(),
            'address'                   => fake('es_ES')->address(),
            'phone'                     => fake('es_ES')->phoneNumber(),
            'password'                  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret'         => null,
            'two_factor_recovery_codes' => null,
            'remember_token'            => Str::random(10),
            'is_active'                 => fake()->boolean(90), // 90% de probabilidad de ser true
            'profile_photo_path'        => 'users/' . fake()->image('public/storage/users', 640, 480, null, false),
            'current_team_id'           => null,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     */
    public function withPersonalTeam(callable $callback = null): static
    {
        if (!Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(fn (array $attributes, User $user) => [
                    'name' => $user->name . '\'s Team',
                    'user_id' => $user->id,
                    'personal_team' => true,
                ])
                ->when(is_callable($callback), $callback),
            'ownedTeams'
        );
    }
}
