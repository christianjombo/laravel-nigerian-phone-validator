<?php

/*
 * This file is part of the Laravel Nigerian Phone Validator package.
 *
 * (c) Christian Jombo <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ChristianJombo\NigerianPhone;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Validator;

class NigerianPhoneServiceProvider extends ServiceProvider
{
    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
     * Default error message.
     *
     * @var string
     */
    protected $message = 'The Phone Number is not a valid Nigerian Phone Number.';

    /**
     * Publishes all the config file this package needs to function.
     */
    public function boot()
    {
        Validator::extend('nigerian_phone', function($attribute, $value, $parameters)
        {
            return preg_match('/(?:(?:(?:\+)?234)?\(0\))?0?(?P<numbers>[789][01]\d{1}[ ]?\d{3}[ ]?\d{4})/', $value);
        }, $this->message);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $file = realpath(__DIR__ .'/NigerianPhoneHelper.php');
        if (file_exists($file)) {
            require_once($file);
        }
    }
}
