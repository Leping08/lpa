@php
    $links = [
        [
            'text' => 'Home',
            'title' => '', // @todo SEO
            'link' => route('home'),
        ],
        [
            'text' => 'Services',
            'title' => '', // @todo SEO
            'link' => route('services'),
        ],
        [
            'text' => 'About',
            'title' => '', // @todo SEO
            'link' => route('about'),
        ],
        [
            'text' => 'Contact Us',
            'title' => '', // @todo SEO
            'link' => route('contact'),
        ],
    ];
@endphp

<div>
    <nav-bar :links="{{ json_encode($links) }}" />
</div>
