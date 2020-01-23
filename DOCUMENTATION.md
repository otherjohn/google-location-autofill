# Google Location Autofill

Google Location Autofill is a [Statamic 3](https://statamic.com/) addon that allows you to pull Google places locations 
via autotype field and save the location information.

![Google autocomplete location](https://developers.google.com/maps/documentation/javascript/images/places-autocomplete-suggest.png)

- [Installation](#installation)
- [Data Output](#data_output)

## Installation
This Fieldtype works with **Statamic 3** only!

#### Step 1.
1. Run the following command in your v3 project root:

```
composer require otherjohn/google-location-autofill
```

#### Step 2. 
Publish addon assets from vendor package
```
php artisan vendor:publish --provider=otherjohn\google-location-autofill\ServiceProvider --force
```

You should now have the field show up in your field list.

Does the Fieldtype does not show up? Rebuild your addon package manifest and clear your cache
```
php please addons:discover
php please cache:clear
```

## Data Output

Since Google has additional charges for data that is pulled by *default*, the ability to select and choose what you want
pulled from Google has been added to the addon. 

The following data is saved with this fieldtype by default. You can change this in the fieldtype settings when you add 
the field to your blueprint. A list of all fields available is in the [PlaceResults docs](https://developers.google.com/maps/documentation/javascript/reference/places-service#PlaceResult).

```
  address_components
  formatted_address
  adr_address
  vicinity
  place_id
  latitude
  longitude
  google_url
```
> ```address_components``` will output the following: ``` street_number,route,locality,administrative_area_level_2,administrative_area_level_1,country,postal_code```. If you remove ```address_components``` you will loose these fields.

> ```geometry``` outputs ```latitude,longitude```. If you remove ```geometry``` you will loose these fields.


## License
This fieldtype is licensed under the MIT license.
