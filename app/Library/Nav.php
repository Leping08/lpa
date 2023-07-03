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
                'title' => 'Land Planning Associates Home Page',
                'link' => route('home'),
            ],
            [
                'text' => 'Services',
                'title' => 'Land Planning Associates Services',
                'link' => route('services'),
            ],
            [
                'text' => 'About',
                'title' => 'Land Planning Associates About Us',
                'link' => route('about'),
            ],
            [
                'text' => 'Contact Us',
                'title' => 'Land Planning Associates Contact Us',
                'link' => route('contact'),
            ],
        ];
    }
}
