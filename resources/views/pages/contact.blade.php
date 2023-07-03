@extends('layouts.app')

{{-- @todo seo page --}}
@section('title', 'Contact Us')

@section('description', '')

@section('content')
    <div class="bg-white dark:bg-stone-800">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <div class="container mx-auto py-10">
            <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-5xl">
                <div class="md:flex">
                    <div class="w-full px-4 py-6 bg-stone-100 dark:bg-stone-900">
                        <h2 class="text-2xl font-bold text-stone-800 dark:text-stone-200">Contact Us</h2>
                        <p class="mt-3 text-stone-600 dark:text-stone-400">Fill out the form below to send us an email and
                            we'll get back to you as
                            soon as possible.</p>
                        <form id="contact_form" class="mt-6" action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="mb-6">
                                <label class="block text-yellow-600 dark:text-yellow-600 font-bold mb-2"
                                    for="name">Name</label>
                                <input type="text" name="name" id="name"
                                    class="dark:text-stone-300 dark:bg-stone-950 w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-stone @error('name') border-red-500 @enderror"
                                    placeholder="Enter your name" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block text-yellow-600 dark:text-yellow-600 font-bold mb-2"
                                    for="email">Email</label>
                                <input type="email" name="email" id="email"
                                    class="dark:text-stone-300 dark:bg-stone-950 w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-stone @error('email') border-red-500 @enderror"
                                    placeholder="Enter your email address" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block text-yellow-600 dark:text-yellow-600 font-bold mb-2"
                                    for="phone">Phone</label>
                                <input type="tel" name="phone" id="phone"
                                    class="dark:text-stone-300 dark:bg-stone-950 w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-stone @error('phone') border-red-500 @enderror"
                                    placeholder="Enter your phone number" value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block text-yellow-600 dark:text-yellow-600 font-bold mb-2"
                                    for="message">Message</label>
                                <textarea name="message" id="message" rows="5"
                                    class="dark:text-stone-300 dark:bg-stone-950 w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-stone @error('message') border-red-500 @enderror"
                                    placeholder="Enter your message">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <input type="text" autocomplete="off" name="first_name" id="first_name" placeholder="First Name" value="" class="hidden" tabindex="-1">
                            <input type="text" autocomplete="off" name="last_name" id="last_name" placeholder="Last Name" value="" class="hidden" tabindex="-1">
                            <input type="text" autocomplete="off" name="address" id="address" placeholder="Address" value="" class="hidden" tabindex="-1">
                            <input type="text" autocomplete="off" name="city" id="city" placeholder="City" value="" class="hidden" tabindex="-1">
                            <input type="text" autocomplete="off" name="state" id="state" placeholder="State" value="" class="hidden" tabindex="-1">
                            <input type="text" autocomplete="off" name="zip" id="zip" placeholder="Zip" value="" class="hidden" tabindex="-1">
                            <input type="text" autocomplete="off" name="country" id="country" placeholder="Country" value="" class="hidden" tabindex="-1">
                            <input type="text" autocomplete="off" name="time" id="time" value="{{ Carbon\Carbon::now()->timestamp }}" class="hidden" tabindex="-1">


                            <div class="mb-6">
                                <button
                                    type="submit"
                                    class="g-recaptcha w-full bg-yellow-600 hover:bg-yellow-700 text-white rounded-lg px-4 py-3 focus:outline-none focus:bg-yellow-500"
                                    data-sitekey="{{ config('google.recaptcha.site') }}"
                                    data-callback='onSubmit'
                                    data-action='submit'>Send Message</button>
                            </div>
                        </form>
                    </div>
                    <script>
                        function onSubmit(token) {
                            document.getElementById("contact_form").submit();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
