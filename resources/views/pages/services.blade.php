@extends('layouts.app')

{{-- @todo seo page --}}
@section('title', '')

@section('description', '')

@php
    $items = [
        [
            'title' => 'Site Development Plans',
            'image' => asset('/img/subdivision-plan.jpg'),
            'paragraph_1' => 'LPA is committed to managing the processing and obtaining approvals for development applications. These applications can include those for conditional land uses, variance requests, and a range of other development-related permissions.',
            'paragraph_2' => 'In addition, LPA provides specific services designed to streamline the permit process. The details of this process might have been discussed during an individual\'s visit to the Planning and Zoning offices. These services aim to simplify the often complex procedures associated with planning and development approvals.',
        ],
        [
            'title' => 'Public Hearing Services',
            'image' => asset('/img/public-hearing.jpg'),
            'paragraph_1' => 'LPA offers representation for clients by providing expert testimony on public hearing issues. These issues can range from site plan approvals and rezoning applications to street vacations. As part of our service, we ensure that every case is handled with the utmost care and professionalism.',
            'paragraph_2' => 'With 20 years of experience as an AICP Planner, the provision of expert testimony is often a crucial component in establishing the public record. We understand the importance of building a comprehensive public record and make it our mission to assist our clients in achieving their objectives.',
        ],
        [
            'title' => 'Consulting',
            'image' => asset('/img/consulting.jpg'),
            'paragraph_1' => 'LPA works closely with clients, offering consultations to help identify the most optimal and effective use of their land. These consultations consider various factors such as zoning regulations, future land use, utilities, environmental considerations, and transportation-related issues. Our aim is to assist clients in making the most informed decisions regarding their land use.',
            'paragraph_2' => 'Additionally, LPA provides due diligence reports and representation at both formal and informal meetings with City or County staff members. These services are offered based on the individual needs of our clients. Our team is dedicated to ensuring that our clients are well-prepared and properly represented in all meetings and negotiations.',
        ],
        [
            'title' => 'Application Processing',
            'image' => asset('/img/approved.jpg'),
            'paragraph_1' => 'LPA is committed to overseeing the processing and obtaining approvals for various development applications. These include applications pertaining to conditional land uses, variances, and other types of development approvals. We dedicate our resources to navigate the complexities of these processes, ensuring all the necessary requirements are met for our clients.',
            'paragraph_2' => 'Additionally, we offer certain services that aim to simplify the permit process. These services could be particularly beneficial for those who have visited the Planning and Zoning offices and found the procedures outlined to be intricate or cumbersome. Our goal is to streamline these procedures, making the permit acquisition process less taxing for our clients.',
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
                                    <p class="mt-2 text-stone-900 dark:text-stone-200">{{ $item['paragraph_1'] }}</p>
                                    <p class="mt-2 text-stone-900 dark:text-stone-200">{{ $item['paragraph_2'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
