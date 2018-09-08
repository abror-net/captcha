<?php

use AbrorNet\Captcha\CaptchaValidator;

$this->app->validator->extend('captcha', function($attribute, $value, $parameters)
{
    return $value == \Captcha::getCurrentSession();
});
