# laravel-nigerian-phone-validator
Guard your application from problems resulting from improperly validated and formatted Phone Numbers. Send Transactional SMS with your mind at rest. Validate Nigerian Phone Numbers in your Laravel app.

### Introduction

This package can be used to validate Nigerian mobile phone numbers. It also provides a helper function to return the validated number in either local or international format.


## Installation

[PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Password, simply add the following line to the require block of your `composer.json` file.

```
"christianjombo/laravel-nigerian-phone-validator": "1.0.*"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

- If you're on Laravel 5.5 or above, that's all you need to do! Check out the usage examples below.
- If you're on Laravel < 5.5, you'll need to register the service provider. Open up `config/app.php` and add the following to the `providers` array:

```php
ChristianJombo\NigerianPhone\NigerianPhoneServiceProvider::class
```

## Usage

Use the rule `nigerian_phone` in your validation like so:

```php
/**
 * Get a validator for an incoming registration request.
 *
 * @param  array  $data
 * @return \Illuminate\Contracts\Validation\Validator
 */
protected function validator(array $data)
{
    return Validator::make($data, [
        'phone' => ['required', 'nigerian_phone'],
    ]);
}
```

By default, the error message returned is `The Phone Number is not a valid Nigerian Phone Number!`.

You can customize the error message by opening `resources/lang/en/validation.php` and adding to the array like so:

```php
  'nigerian_phone' => 'Your phone number no be from naija',
```

### Helper function

The package exposes the `nigerian_phone()` helper function that returns a nigerian number formatted to international format (e.g +2348066128880), if `$local` is set to false or not provided. If `$local` is provided and set to true, a local number (e.g 08066128880) is returned. By default, `$local` is set to false:

```php
nigerian_phone($number, $local = false)
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

## Inspiration

* [Prosper Otemuyiwa](https://github.com/unicodeveloper/laravel-password)

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Biko, Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/christianjombo)!

Thanks!
Christian Jombo.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
