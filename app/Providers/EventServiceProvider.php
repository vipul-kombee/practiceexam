<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\UserRegistered;
use App\Listeners\SendUserRegistrationEmail;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UserRegistered::class => [
            SendUserRegistrationEmail::class,
        ],
    ];

    public function boot(): void
    {
        //
    }
}

// namespace App\Providers;

// use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
// use Illuminate\Support\Facades\Event;

// class EventServiceProvider extends ServiceProvider
// {
//     /**
//      * The event-to-listener mappings for the application.
//      *
//      * @var array
//      */
//     protected $listen = [
//         // Define your event and listener mappings here
//     ];

//     /**
//      * Register any events for your application.
//      */
//     public function boot(): void
//     {
//         //
//     }
// }
