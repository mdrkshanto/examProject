<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (User::count() < 1) {
            User::create([
                'name' => 'demo_user',
                'email' => 'user@demo.com',
                'password' => bcrypt('12345678'),
                'email_verified_at' => now(),
            ]);
        }
    }
}
