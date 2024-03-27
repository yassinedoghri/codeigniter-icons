<?php

declare(strict_types=1);

namespace CodeIgniterIconify\Config;

use CodeIgniter\Config\BaseService;
use CodeIgniterIconify\Config\Iconify as IconifyConfig;
use PHPIconify\Iconify;

class Services extends BaseService
{
    public static function iconify(bool $getShared = true): Iconify
    {
        if ($getShared) {
            /** @var Iconify */
            return static::getSharedInstance('iconify');
        }

        /** @var IconifyConfig $config */
        $config = config('Iconify');

        return new Iconify([
            'api_hosts'    => $config->apiHosts,
            'icons_folder' => $config->iconsFolder,
        ]);
    }
}
