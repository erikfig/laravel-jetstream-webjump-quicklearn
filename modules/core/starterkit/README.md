# StarterKit

To install this package add below to composer.json and run `composer update`.

```
    "repositories": [
        {
            "type": "path",
            "url": "./modules/core/starterkit"
        }
    ],
    "require": {
        "erikfig/starterkit": "*"
    },
```

## Locale Middleware

Add `ErikFig\Core\StarterKit\Http\Middleware\SetLocale` middleware to `app\Http\Kernel.php`.

```
    protected $middlewareGroups = [
        'web' => [

            // ... anothers middlewares

            \ErikFig\Core\StarterKit\Http\Middleware\SetLocale::class, // <-- here
        ],
```

## UpdateUserProfileInformation Action

Copy `actions/Fortify/UpdateUserProfileInformation.php` of this module to `app/Fortify/UpdateUserProfileInformation.php` and replace it.

## Publish js and language

Run `php artisan vendor:publish --provider="ErikFig\Core\StarterKit\Providers\CoreStarterKitProvider"`.

## Jetstream Installation

Read Jetstream documentation:

[https://jetstream.laravel.com/2.x/installation.html](https://jetstream.laravel.com/2.x/installation.html)

Att. Erik Figueiredo
