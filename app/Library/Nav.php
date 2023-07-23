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
                'title' => 'Land Planning Associates',
                'link' => route('home'),
            ],
            [
                'text' => 'Services',
                'title' => 'Land Planning Associates Services',
                'link' => route('services'),
            ],
            [
                'text' => 'About',
                'title' => 'About Land Planning Manatee County',
                'link' => route('about'),
            ],
            [
                'text' => 'Contact Us',
                'title' => 'Contact Land Planning Associates',
                'link' => route('contact'),
            ],
        ];
    }
}
