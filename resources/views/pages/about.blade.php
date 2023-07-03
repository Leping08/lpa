@extends('layouts.app')

@section('title', 'About Us')

@section('description', '')

@section('content')
    <div class="bg-white dark:bg-stone-800">
        <div class="container mx-auto py-10">
            <div class="py-16 sm:py-24">
                <div class="mx-auto px-6 lg:px-8">
                    <div class="mx-auto lg:mx-0">
                        {{-- <p class="text-base font-semibold leading-7 text-yellow-600 dark:text-yellow-500">Years of experience</p> --}}
                        <h2 class="mt-2 text-3xl font-bold tracking-tight text-yellow-600 dark:text-yellow-500 sm:text-5xl">
                            About Us</h2>
                        <p class="mt-6 text-lg leading-8 dark:text-stone-200 text-stone-800">Land Planning Associates (LPA)
                            is proud to represent landowners and developers with assistance in
                            obtaining approvals of anything relative to land use permitting. The main emphasis is to
                            represent small
                            businesses unfamiliar with negotiating their way through a variety of permitting processes. Most
                            work is
                            related to rezones and other conditional land use approvals in Manatee County, Florida.</p>
                        <p class="mt-6 text-lg leading-8 dark:text-stone-200 text-stone-800">Many clients of LPA are
                            typically seeking zoning approval for entities such as churches, personal
                            service establishments, restaurants, etc. in the occupational needs of small businesses. This
                            includes
                            sign consulting and variance needs. Other services are provided relating to landowners wishing
                            to split
                            or subdivide their land.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-stone-50 dark:bg-stone-900">
        <div class="container mx-auto py-10">
            <div class="py-16 sm:py-24">
                <div class="mx-auto px-6 lg:px-8">
                    <div class="mx-auto lg:mx-0">
                        <div class="items-center grid grid-cols-1 md:grid-cols-4">
                            <div class="mx-auto">
                                <img class="w-full rounded-xl shadow-xl" src="{{ asset('img/robert.jpg') }}" alt="Robert Schmitt">
                            </div>
                            <div class="col-span-3">
                                <div>
                                    <h2 class="mt-2 text-2xl tracking-tight text-yellow-600 dark:text-yellow-500">
                                        Robert Schmitt</h2>
                                        <div class="w-full border dark:border-stone-700 border-stone-300" />
                                </div>
                                <p class="mt-6 text-lg leading-8 dark:text-stone-200 text-stone-800">Mr. Schmitt has worked in
                                    Manatee and Sarasota Counties for over 30 years. This includes various
                                    terms for governmental entities in Manatee and Sarasota County. Mr. Schmitt has served as
                                    the
                                    Consultant Planner for the City of Palmetto and most recently as the Manatee County Zoning
                                    Official.
                                    As such, he has been responsible for authoring many local documents and changes to various
                                    ordinances. Mr. Schmitt takes pride in that most changes were made to reduce red tape in the
                                    permitting process. It is for this reason that LPA serves small business and landowners.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
