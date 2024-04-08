<?php

declare(strict_types=1);

use PHPIcons\PHPIcons;

if (! function_exists('phpicons')) {
    /**
     * Provides convenient access to the PHPIcons class
     * for rendering icons
     */
    function phpicons(string $iconKey): PHPIcons
    {
        /** @var PHPIcons $phpicons */
        $phpicons = service('phpicons');

        return $phpicons
            ->icon($iconKey);
    }
}

if (! function_exists('icon')) {
    /**
     * Provides convenient access to rendering an icon with optional attributes using the PHPIcons class
     *
     * @param array<string, string> $attributes
     */
    function icon(string $iconKey, array $attributes = []): string
    {
        /** @var PHPIcons $phpicons */
        $phpicons = service('phpicons');

        return (string) $phpicons
            ->icon($iconKey)
            ->attributes($attributes);
    }
}
