<?php

namespace OtherJohn\GoogleLocationAutofill;

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
        Statamic::externalScript($url); /* <-- Just because you can import external scripts, doesn't mean you go around using it for crap like jquery cdn and such! Thats what NPM is used for. https://github.com/statamic/cms/issues/961#issuecomment-558690407  */
        $this->publishes([
            __DIR__ . '/config/google-location-autofill.php' => config_path('google-location-autofill.php'),
        ]);
    }

}
