# Captcha

[![Build Status](https://travis-ci.org/abror-net/captcha.svg?branch=master)](https://travis-ci.org/abror-net/captcha)

Simple image captcha based on [cool-php-captcha v0.3.2][1].


## Installation

Firstly, you need to add the package to the `require` attribute of your `composer.json` file:

```json
{
    "require" : {
        "abror-net/captcha": "1.*"
    }
}

```

Now, run `composer update` from command line to install the package.

Then, update your `config/app.php` by adding new value to the `providers` and `alias` key:

```php
    'providers' => array (

        //...

        'AbrorNet\Captcha\CaptchaServiceProvider'
    ),

    //...

    'aliases' => array (

        //...

        'Captcha'         => 'AbrorNet\Captcha\Facade\Captcha',
    ),
```

Lastly, you need to publish vendor assets

```bash
    php artisan vendor:publish
```


## Usage

There are two main usage of the package.

1. **Image link**, you can use the following directive to generate the captcha link.
```php
    //Will return http://[web url]/captcha/image
    Captcha::url();
```
1. **Validator**, you can use `captcha` validator or `Captcha::isValid($value)` to validate whether the input is match with the captcha image or not.
```php
   $rules = array(
        '[input name]' => 'captcha'
    );

    Captcha::isValid('captcha-input');  //return true if valid. Otherwise return false
```
**Note: You have to define validation error message for `captcha` by yourself on `resources/lang/{locale}/validation.php`**

[1]: https://code.google.com/p/cool-php-captcha   "cool-php-captcha"
