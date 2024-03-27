<?php

declare(strict_types=1);

namespace CodeIgniterIconify\Config;

use CodeIgniter\Config\BaseConfig;

class Iconify extends BaseConfig
{
    /**
     * @var string[]
     */
    public array $apiHosts = [];

    public string $iconsFolder = APPPATH . 'Resources/icons';
}
