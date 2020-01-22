# Google Location Autofill

![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)
[![Total Downloads](https://img.shields.io/packagist/dt/otherjohn/google-location-autofill.svg)](https://packagist.org/packages/otherjohn/google-location-autofill) [![Downloads Month](https://img.shields.io/packagist/dm/otherjohn/google-location-autofill.svg)](https://packagist.org/otherjohn/google-location-autofill) [![PayPal donation](https://img.shields.io/badge/paypal-donate-blue.svg)](https://paypal.me/otherjohn)


- [Installation](#installation)
- [Data](#data)
- [Reporting issues](#reporting-issues)

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

The following data is saved with this fieldtype

```
  street_number
  route
  locality
  administrative_area_level_2
  administrative_area_level_1
  country
  postal_code
  formatted_address
  adr_address
  vicinity
  place_id
  latitude
  longitude
  google_url
```

## Reporting issues

 This is my first ever community code share. I will try to fix issues, but I can't promise anything.
 ![It's Free Software](itsfree.gif)




Inital code taken from [olefirenko/vue-google-autocomplete](olefirenko/vue-google-autocomplete) and modified to return more data and work with Statamic.
