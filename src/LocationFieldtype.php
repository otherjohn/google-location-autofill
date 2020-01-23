<?php

namespace OtherJohn\GoogleLocation;
use Statamic\Fields\Fieldtype;

class LocationFieldtype extends Fieldtype
{
    protected $icon = 'pin';

    protected $configFields = [

        'data_fields' => [
            'type' => 'select',
            'searchable'=> true,
            'multiple' =>true,
            'default' =>['formatted_address','address_components', 'adr_address','place_id','url'],
            'options' => [
                'address_components',
                'adr_address',
                'alt_id',
                'aspects',
                'formatted_address',
                'formatted_phone_number',
                'geometry',
                'html_attributions',
                'icon',
                'id',
                'international_phone_number',
                'name',
                'opening_hours',
                'permanently_closed',
                'photos',
                'place_id',
                'plus_code',
                'price_level',
                'rating',
                'reviews',
                'types',
                'url',
                'user_ratings_total',
                'utc_offset_minutes',
                'vicinity',
                'website',
            ],
            'instructions' => 'Select the fields you would like to return from Google. See the [Google docs](https://developers.google.com/maps/documentation/javascript/reference/places-service#PlaceResult) for data field definitions'
        ]
    ];



    public function preload()
    {
        return [
            'placesAppId' => env('PLACES_APP_ID', false),
            'placesApiKey' => env('PLACES_API_KEY', false)
        ];
    }

    /**
     * The blank/default value
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }
}
