# Google Location Autofill

![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)
[![Total Downloads](https://img.shields.io/packagist/dt/otherjohn/google-location-autofill.svg)](https://packagist.org/packages/otherjohn/google-location-autofill) [![Downloads Month](https://img.shields.io/packagist/dm/otherjohn/google-location-autofill.svg)](https://packagist.org/otherjohn/google-location-autofill) [![PayPal donation](https://img.shields.io/badge/paypal-donate-blue.svg)](https://paypal.me/otherjohn)

Google Location Autofill is a [Statamic 3](https://statamic.com/) addon that allows you to pull Google places locations 
via autotype field and save the location information.

![Google autocomplete location](https://developers.google.com/maps/documentation/javascript/images/places-autocomplete-suggest.png)

- [Installation](#installation)
- [Data](#data)
- [Reporting issues](#reporting-issues)
- [Recognition](#recognition)

## Installation

Run the following command in your v3 project root:

```
composer require otherjohn/google-location-autofill
```

publish addon assets from vendor package
```
php artisan vendor:publish --provider=otherjohn\google-location-autofill\ServiceProvider --force
```

## Data

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




## Reporting issues

 This is my first ever community code share. I will try to fix issues, but I can't promise anything.
 
 ![It's Free Software](itsfree.gif)



## Recognition
Initial code taken from [olefirenko/vue-google-autocomplete](https://github.com/olefirenko/vue-google-autocomplete) and modified to return more data and work with Statamic.
& ["Added the option to specify which fields to fetch in the PlaceResult object" Pull Request](https://github.com/olefirenko/vue-google-autocomplete/pull/103)
