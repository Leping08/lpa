<?php

namespace App\Library;

class Nav
{
    /**
     * Get the navigation items.
     * @return array
     */
    public static function items(): array
    {
        return [
            [
                'text' => 'Home',
                'link' => route('home'),
            ],
            [
                'text' => 'Services',
                'link' => route('services'),
            ],
            [
                'text' => 'About',
                'link' => route('about'),
            ],
            [
                'text' => 'Contact Us',
                'link' => route('contact'),
            ],
        ];
    }
}
