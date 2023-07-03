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

<footer class="bg-stone-100 dark:bg-stone-950">
    <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 lg:px-8">
        <nav class="flex justify-center space-x-12 pb-4 items-center" aria-label="Footer">
            @foreach ($links as $item)
                <div>
                    <a href="{{ $item['link'] }}" title="{{ $item['title'] }}"
                        class="text-sm leading-6 text-stone-600 dark:text-stone-400 hover:text-stone-900 dark:hover:text-stone-100">{{ $item['text'] }}</a>
                </div>
            @endforeach
        </nav>
        <div class="text-center flex justify-center items-center mt-8">
            <div class="w-6 h-6 text-stone-500 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>lightbulb-on-10</title>
                    <path fill="currentColor"
                        d="M1 11H4V13H1V11M19.1 3.5L17 5.6L18.4 7L20.5 4.9L19.1 3.5M11 1H13V4H11V1M4.9 3.5L3.5 4.9L5.6 7L7 5.6L4.9 3.5M10 22C10 22.6 10.4 23 11 23H13C13.6 23 14 22.6 14 22V21H10V22M12 6C8.7 6 6 8.7 6 12C6 14.2 7.2 16.2 9 17.2V19C9 19.6 9.4 20 10 20H14C14.6 20 15 19.6 15 19V17.2C16.8 16.2 18 14.2 18 12C18 8.7 15.3 6 12 6M13 15.9V17H11V15.9C9.3 15.5 8 13.9 8 12C8 9.8 9.8 8 12 8S16 9.8 16 12C16 13.9 14.7 15.4 13 15.9M20 11H23V13H20V11Z" />
                </svg>
            </div>
            <dark-mode-toggle></dark-mode-toggle>
            <div class="w-6 h-6 text-stone-500 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>lightbulb-off</title>
                    <path fill="currentColor"
                        d="M12,2C9.76,2 7.78,3.05 6.5,4.68L16.31,14.5C17.94,13.21 19,11.24 19,9A7,7 0 0,0 12,2M3.28,4L2,5.27L5.04,8.3C5,8.53 5,8.76 5,9C5,11.38 6.19,13.47 8,14.74V17A1,1 0 0,0 9,18H14.73L18.73,22L20,20.72L3.28,4M9,20V21A1,1 0 0,0 10,22H14A1,1 0 0,0 15,21V20H9Z" />
                </svg>
            </div>
        </div>
        <p class="mt-10 text-center text-xs leading-5 text-stone-500">&copy; {{ date('Y') }}
            {{ config('app.seo_name') }}, Inc. All rights reserved.
        </p>
        <p class="mt-4 text-center text-xs leading-5 text-stone-500">
            Powered By
            <a href="https://deltavcreative.com/?utm_source=website&utm_medium=lpa" title="DeltaV Creative"
                target="_blank"
                class="text-xs leading-5 text-yellow-600 dark:text-yellow-500 hover:text-yellow-700 dark:hover:text-yellow-300">DeltaV
                Creative</a>
        </p>
    </div>
</footer>
