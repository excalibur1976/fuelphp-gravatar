fuelphp-gravatar
================

FuelPHP Gravatar Package
By Benjamin Butschko

This package - based on furley's gravatar package - is an enhanced package for FuelPHP to retrieve easy gravatar.com profile images. 
It allows you to create the full gravatar image url based on given e-mail address.

Installation

    save the gravatar folder into your packages folder

    add gravatar to your config file fuel/app/config/config.php

    'packages'  => array(
        'gravatar'
    ),

Usage

Pass in an email address and this method will return the url of a gravatar if there is a gravatar associated with email address. Otherwise, it will return the url of the default gravatar.

echo \Gravatar::forge('your@mailaddress.tld');

You can also pass optional parameters for modifying the default settings of this package. Options include the following:

$options = array();
$options['rating']  = 'X'; // maximum allowed rating. accepts: G | PG | R | X
$options['size']    = 80; // size of gravatar image
$options['image']   = 'http://www.gravatar.com/avatar/00000000000000000000000000000000'; // default image url, if no gravatar profile exist

echo \Gravatar::forge('your@mailaddress.tld', $options);

Thats it - have fun :o)