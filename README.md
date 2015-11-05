# CookieWarning plugin for CakePHP

[![Build Status](https://api.travis-ci.org/cakephp-fr/cookie-warning.png?branch=master)](https://travis-ci.org/cakephp-fr/cookie-warning)
[![Latest Stable Version](https://poser.pugx.org/cakephp-fr/cookie-warning/v/stable.png)](https://packagist.org/packages/cakephp-fr/cookie-warning)
[![Minimum PHP Version](http://img.shields.io/badge/php-%3E%3D%205.4-8892BF.svg)](https://php.net/)
[![License](https://poser.pugx.org/cakephp-fr/cookie-warning/license.png)](https://packagist.org/packages/cakephp-fr/cookie-warning)
[![Total Downloads](https://poser.pugx.org/cakephp-fr/cookie-warning/d/total.png)](https://packagist.org/packages/cakephp-fr/cookie-warning)

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require cakephp-fr/cookie-warning
```

Then, enable the plugin in your `config/bootstrap.php` file:

    Plugin::load('CookieWarning', ['routes' => true, 'bootstrap' => true]);

Finally add a `cookie_warning.php` file in `/config` of your app. This is where you'll be able to configure the plugin. There is a template example for this `cookie_warning.php` in the `/config` folder of the plugin.

## Usage



## License

The MIT License (MIT)

Copyright (c) 2015 <copyright holders>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
