<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    public function userNameCheck()
    {
        if (User::all()->count() > 0) {
            return $this->faker->name();
        } else {
            return 'edward';
        }
    }

    public function emailCheck()
    {
        if (User::where('email', 'edward@rockymountainweb.design')->first() !== null) {
            return $this->faker->unique()->safeEmail();
        } else {
            return 'edward@rockymountainweb.design';
        }
    }

    public function adminCheck() {
        if(User::where('email', 'edward@rockymountainweb.design')->first() !== null) {
            return false;
        } else {
            return true;
        }
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->userNameCheck(),
            'email' => $this->emailCheck(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
            'is_admin' => $this->adminCheck(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
