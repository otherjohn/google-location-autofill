<?php

namespace OtherJohn\GoogleLocation;

use Statamic\Statamic;
use Statamic\Providers\AddonServiceProvider;


class ServiceProvider extends AddonServiceProvider
{

    protected $fieldtypes = [
        LocationFieldtype::class,
    ];

    protected $scripts = [
        __DIR__.'/../dist/js/location.js',
    ];


    public function boot()
    {

        parent::boot();
        $url = 'https://maps.googleapis.com/maps/api/js?libraries=places&key=' . config('google-location-autofill.google_places_api_key');
        Statamic::externalScript($url);
        $this->publishes([
            __DIR__ . '/config/google-location-autofill.php' => config_path('google-location-autofill.php'),
        ]);
    }

}
