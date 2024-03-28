<?php

declare(strict_types=1);

use PHPIconify\Iconify;

if (! function_exists('iconify')) {
    /**
     * Provides convenient access to the Iconify class
     * for rendering icons
     */
    function iconify(string $iconifyIcon): Iconify
    {
        /** @var Iconify $iconify */
        $iconify = service('iconify');

        return $iconify
            ->icon($iconifyIcon)
            ->attributes([]);
    }
}

if (! function_exists('icon')) {
    /**
     * Provides convenient access to rendering an icon with optional attributes using the Iconify class
     *
     * @param array<string, string> $attributes
     */
    function icon(string $iconifyIcon, array $attributes = []): string
    {
        /** @var Iconify $iconify */
        $iconify = service('iconify');

        return (string) $iconify
            ->icon($iconifyIcon)
            ->attributes($attributes);
    }
}
