<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Anhskohbo\NoCaptcha\NoCaptcha;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Ensure NoCaptcha instance is created properly
        $nocaptcha = new NoCaptcha(Config::get('captcha.secret'), Config::get('captcha.sitekey'));

        Validator::extend('captcha', function ($attribute, $value, $parameters, $validator) use ($nocaptcha) {
            return $nocaptcha->verifyResponse($value);
        });

        Validator::replacer('captcha', function ($message, $attribute, $rule, $parameters) {
            return 'The CAPTCHA verification failed. Please try again.';
        });
    }
}
