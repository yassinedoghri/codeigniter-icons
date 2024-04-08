<?php

declare(strict_types=1);

namespace CodeIgniterIcons\Config;

use CodeIgniter\Config\BaseService;
use CodeIgniterIcons\Config\Icons as IconsConfig;
use PHPIcons\PHPIcons;

class Services extends BaseService
{
    public static function phpicons(bool $getShared = true): PHPIcons
    {
        if ($getShared) {
            /** @var PHPIcons */
            return static::getSharedInstance('phpicons');
        }

        /** @var IconsConfig $iconsConfig */
        $iconsConfig = config('Icons');

        return new PHPIcons($iconsConfig->phpIconsConfigPath);
    }
}
