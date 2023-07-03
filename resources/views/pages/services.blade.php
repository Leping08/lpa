@extends('layouts.app')

@section('title', '')

@section('description', '')

@php
    $items = [
        [
            'title' => 'Site Development Plans',
            'image' => asset('/img/subdivision-plan.jpg'),
            'description_1' => 'LPA will process and gain approval of development applications for conditional land uses, variance applications and other miscellaneous development approvals. Some services are provided to minimize the permit process that may have been described by a visit to Planning and Zoning offices.',
            'description_2' => 'LPA will process and gain approval of development applications for conditional land uses, variance applications and other miscellaneous development approvals. Some services are provided to minimize the permit process that may have been described by a visit to Planning and Zoning offices.',
        ],
        [
            'title' => 'Public Hearing Services',
            'image' => asset('/img/public-hearing.jpg'),
            'description_1' => 'LPA represents clients with expert testimony on public hearing matters relative to anything from rezones and site plan approvals to street vacations. As a 20 year AICP Planner, this expert testimony is often necessary for building the public record.',
            'description_2' => 'LPA represents clients with expert testimony on public hearing matters relative to anything from rezones and site plan approvals to street vacations. As a 20 year AICP Planner, this expert testimony is often necessary for building the public record.',
        ],
        [
            'title' => 'Consulting',
            'image' => asset('/img/consulting.jpg'),
            'description_1' => 'LPA will consult with clients to determine the highest and best use of their land based upon zoning, future land use, utilities, environment, and transportation related matters. Due diligence reports and representation at formal and informal meetings with City/County staff members are provided on an as-needed basis.',
            'description_2' => 'LPA will consult with clients to determine the highest and best use of their land based upon zoning, future land use, utilities, environment, and transportation related matters. Due diligence reports and representation at formal and informal meetings with City/County staff members are provided on an as-needed basis.',
        ],
        [
            'title' => 'Application Processing',
            'image' => asset('/img/approved.jpg'),
            'description_1' => 'LPA will process and gain approval of development applications for conditional land uses, variance applications and other miscellaneous development approvals. Some services are provided to minimize the permit process that may have been described by a visit to Planning and Zoning offices.',
            'description_2' => 'LPA will process and gain approval of development applications for conditional land uses, variance applications and other miscellaneous development approvals. Some services are provided to minimize the permit process that may have been described by a visit to Planning and Zoning offices.',
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
                                <img src="{{ $item['image'] }}" alt="The Legacy Trail" title="EBike Trail Sarasota"
                                    class="lg:w-3/4 w-full rounded-xl shadow-xl">
                            </div>
                            <div class="lg:ml-auto lg:pl-4 lg:pt-4 {{ $loop->even ? 'lg:order-first' : '' }}">
                                <div class="lg:max-w-lg">
                                    <h2 class="text-3xl font-semibold text-yellow-600 dark:text-yellow-600">
                                        {{ $item['title'] }}</h2>
                                    <p class="mt-2 text-stone-900 dark:text-stone-200">{{ $item['description_1'] }}</p>
                                    <p class="mt-2 text-stone-900 dark:text-stone-200">{{ $item['description_2'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
