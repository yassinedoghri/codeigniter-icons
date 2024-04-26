<div align="center">

# CodeIgniter Icons 🔥 🙂

A [CodeIgniter4](https://codeigniter.com/) library with convenient helper
functions to render svg icons using
[php-icons](https://github.com/yassinedoghri/php-icons).

[![Latest Stable Version](https://poser.pugx.org/yassinedoghri/codeigniter-icons/v)](https://packagist.org/packages/yassinedoghri/codeigniter-icons)
[![Total Downloads](https://poser.pugx.org/yassinedoghri/codeigniter-icons/downloads)](https://packagist.org/packages/yassinedoghri/codeigniter-icons)
[![License](https://img.shields.io/github/license/yassinedoghri/codeigniter-icons?color=green)](https://packagist.org/packages/yassinedoghri/codeigniter-icons)
[![PHP Version Require](https://poser.pugx.org/yassinedoghri/codeigniter-icons/require/php)](https://packagist.org/packages/yassinedoghri/codeigniter-icons)

</div>

## 🚀 Getting started

### 0. Prerequisites

Usage of CodeIgniter Icons requires the following:

- A CodeIgniter 4.3.5+ based project
- Composer for package management
- PHP 8.1+

### 1. Install via composer

```sh
composer require yassinedoghri/codeigniter-icons
```

### 2. Setup

1. [init and configure PHPIcons](https://github.com/yassinedoghri/php-icons),
   ie. create the PHPIcons config file.

2. add icons helper to your `app/Config/Autoload.php` file:

```php
public $helpers = [/*...other helpers...*/, 'icons'];
```

### 3. Usage

Use the `icon(string $iconKey)` or `phpicons(string $iconKey)` helpers in your
View files to render svg icons:

```php
<?= icon('material-symbols:bolt') ?>
// <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
//      <path fill="currentColor" d="m8 22l1-7H4l9-13h2l-1 8h6L10 22z"/>
// </svg>

<?= icon('material-symbols:bolt', ['class' => 'text-2xl', "style" => "color: yellow;"]) ?>
// <svg class="text-2xl" style="color: yellow;" [...]>...</svg>

<?= phpicons('material-symbols:bolt')
        ->attr('class', 'text-2xl')
        ->attr('style', 'color: yellow;') ?>
// <svg class="text-2xl" style="color: yellow;" [...]>...</svg>
```

For more usage info, see
[php icons docs](https://github.com/yassinedoghri/php-icons).

## ⚙️ Configuration

Checkout PHPIcons config reference to tweak things as you please.

```php
// new file - app/Config/Icons.php
<?php

declare(strict_types=1);

namespace Config;

// ...
use CodeIgniterIcons\Config\Icons as CodeIgniterIcons;

class Icons extends CodeIgniterIcons
{
    public string $phpIconsConfigPath = ROOTPATH . 'php-icons.php';
}
```

## 📜 License

Code released under the [MIT License](https://choosealicense.com/licenses/mit/).

Copyright (c) 2024-present, Yassine Doghri
([@yassinedoghri](https://yassinedoghri.com/)).
