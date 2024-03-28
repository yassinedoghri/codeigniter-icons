<?php

declare(strict_types=1);

use PHPIconify\Exceptions\PackNotSetException;
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

        try {
            return $iconify
                ->icon($iconifyIcon)
                ->attributes([]);
        } catch (PackNotSetException) {
            $defaultPack = config('Iconify')
->defaultPack;
            if ($defaultPack !== '') {
                return $iconify->icon($defaultPack . ':' . $iconifyIcon)->attributes([]);
            }

            throw new RuntimeException(
                'Icon pack is missing! You may set a default pack in your Iconify config or specify one as a prefix (ie. {pack}:{icon}).'
            );
        }
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

        try {
            return (string) $iconify
                ->icon($iconifyIcon)
                ->attributes($attributes);
        } catch (PackNotSetException) {
            $defaultPack = config('Iconify')
->defaultPack;
            if ($defaultPack !== '') {
                return (string) $iconify->icon($defaultPack . ':' . $iconifyIcon)->attributes($attributes);
            }

            throw new RuntimeException(
                'Icon pack is missing! You may set a default pack in your Iconify config or specify one as a prefix (ie. {pack}:{icon}).'
            );
        }
    }
}
