@extends('layouts.app')

@section('title', 'Land Planning and Permitting Manatee County | Zoning and Rezoning Bradenton')

@section('description', 'Land Planning Associates proudly assists Bradenton and Lakewood Ranch developers in obtaining approvals for land use permitting, site development, and zoning approvals in Manatee County.')

@php
    $items = [
        [
            'title' => 'Public Hearing Services',
            'image_alt' => 'Public Hearing Services',
            'image_title' => 'Public Hearing Services Bradenton',
            'image' => asset('/img/public-hearing.jpg'),
            'description' => 'LPA represents clients with expert testimony on public hearing matters relative to anything from rezones and site plan approvals to street vacations. As a 20 year AICP Planner, this expert testimony is often necessary for building the public record.',
        ],
        [
            'title' => 'Consulting',
            'image_alt' => 'Consulting Services',
            'image_title' => 'Consulting Services Manatte County',
            'image' => asset('/img/consulting.jpg'),
            'description' => 'LPA will consult with clients to determine the highest and best use of their land based upon zoning, future land use, utilities, environment, and transportation related matters. Due diligence reports and representation at formal and informal meetings with City/County staff members are provided on an as-needed basis.',
        ],
        [
            'title' => 'Application Processing',
            'image_alt' => 'Application Processing',
            'image_title' => 'Development Applications Bradenton',
            'image' => asset('/img/approved.jpg'),
            'description' => 'LPA will process and gain approval of development applications for conditional land uses, variance applications and other miscellaneous development approvals. Some services are provided to minimize the permit process that may have been described by a visit to Planning and Zoning offices.',
        ],
    ];
@endphp

@section('content')
    <main class="bg-white dark:bg-stone-800">

        @foreach ($items as $item)
            <div>
                <div
                    class="overflow-hidden {{ $loop->even ? 'bg-stone-100 dark:bg-stone-900' : 'bg-white dark:bg-stone-800' }} py-24 sm:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div
                            class="mx-auto items-center grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                            <div class="flex items-start justify-around">
                                <img src="{{ $item['image'] }}" alt="{{ $item['image_alt'] }}" title="{{ $item['image_title'] }}"
                                    class="lg:w-3/4 w-full rounded-xl shadow-xl">
                            </div>
                            <div class="lg:ml-auto lg:pl-4 lg:pt-4 {{ $loop->even ? 'lg:order-first' : '' }}">
                                <div class="lg:max-w-lg">
                                    <h2 class="text-3xl font-semibold text-yellow-600 dark:text-yellow-600">
                                        {{ $item['title'] }}</h2>
                                    <p class="mt-2 text-stone-900 dark:text-stone-200">{{ $item['description'] }}</p>
                                </div>
                                <div class="mt-4">
                                    <a
                                        href="{{ route('services') }}"
                                        class=" text-yellow-600 rounded-md border border-yellow-600 px-3.5 py-2.5 text-sm font-semibold hover:text-white shadow-sm hover:bg-yellow-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
