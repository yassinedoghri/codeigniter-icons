# CodeIgniter Iconify 🔥 🙂

[![Latest Stable Version](http://poser.pugx.org/yassinedoghri/codeigniter-iconify/v)](https://packagist.org/packages/yassinedoghri/codeigniter-iconify)
[![Total Downloads](http://poser.pugx.org/yassinedoghri/codeigniter-iconify/downloads)](https://packagist.org/packages/yassinedoghri/codeigniter-iconify)
[![Latest Unstable Version](http://poser.pugx.org/yassinedoghri/codeigniter-iconify/v/unstable)](https://packagist.org/packages/yassinedoghri/codeigniter-iconify)
[![License](https://img.shields.io/github/license/yassinedoghri/codeigniter-iconify?color=green)](https://packagist.org/packages/yassinedoghri/codeigniter-iconify)
[![PHP Version Require](http://poser.pugx.org/yassinedoghri/codeigniter-iconify/require/php)](https://packagist.org/packages/yassinedoghri/php-iconify)

A [CodeIgniter4](https://codeigniter.com/) library with convenient helper
functions to render svg icons using
[php-iconify](https://github.com/yassinedoghri/php-iconify).

## 🚀 Getting started

### 0. Prerequisites

Usage of CodeIgniter Iconify requires the following:

- A CodeIgniter 4.3.5+ based project
- Composer for package management
- PHP 8.1+

### 1. Install via composer

```sh
composer require yassinedoghri/codeigniter-iconify
```

### 2. Setup

Add iconify helper to the app/Config/Autoload.php file:

```php
public $helpers = [/*...other helpers...*/, 'iconify'];
```

### 3. Usage

Use the `icon()` or `iconify()` helpers in your View files to render svg icons:

```php
<?= icon('material-symbols:bolt'); ?>
// <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
//      <path fill="currentColor" d="m8 22l1-7H4l9-13h2l-1 8h6L10 22z"/>
// </svg>

<?= icon('material-symbols:bolt', ['class' => 'text-2xl', "style" => "color: yellow;"]); ?>
// <svg class="text-2xl" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
//      <path fill="currentColor" d="m8 22l1-7H4l9-13h2l-1 8h6L10 22z"/>
// </svg>

<?= iconify('material-symbols:bolt')
        ->attr('class', 'text-2xl')
        ->attr('style', 'color: yellow;'); ?>
// <svg class="text-2xl" style="color: yellow;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
//      <path fill="currentColor" d="m8 22l1-7H4l9-13h2l-1 8h6L10 22z"/>
// </svg>
```

## Configuration

By default, CodeIgniter Iconify will use Iconify's public APIs to download icons
and cache them into the `app/Resources/icons` folder. You may overwrite this
config with your own `app/Config/Iconify.php` file:

```php
// new file - app/Config/Iconify.php
<?php

declare(strict_types=1);

namespace Config;

// ...
use CodeIgniterIconify\Config\Iconify as CodeIgniterIconify;

class Iconify extends CodeIgniterIconify
{
    public $apiHosts = [];
    public $iconsFolder = APPPATH . 'Resources/icons';
}
```

## 📜 License

Code released under the [MIT License](https://choosealicense.com/licenses/mit/).

Copyright (c) 2024-present, Yassine Doghri
([@yassinedoghri](https://yassinedoghri.com/)).
