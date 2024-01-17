<!DOCTYPE html>
    {{-- plain.blade.php - Plain - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body class="{{ backpack_theme_config('classes.body') }}" bp-layout="plain">

@include(backpack_view('layouts.partials.light_dark_mode_logic'))

<div class="h-screen flex flex-col">

    <div class="flex flex-col flex-1">

        <div class="flex-1">
            <main class="{{ backpack_theme_config('options.useFluidContainers') ? 'max-w-full mx-auto' : 'max-w-7xl mx-auto' }}">

                @yield('before_breadcrumbs_widgets')
                @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))
                @yield('after_breadcrumbs_widgets')

                <div class="max-w-full mx-auto px-4 sm:px-6 md:px-8">
                    @yield('before_content_widgets')
                    @yield('content')
                    @yield('after_content_widgets')
                </div>
            </main>
        </div>

        @include(backpack_view('inc.footer'))
    </div>
</div>

@yield('before_scripts')
@stack('before_scripts')

@include(backpack_view('inc.scripts'))
@include(backpack_view('inc.theme_scripts'))

@yield('after_scripts')
@stack('after_scripts')
</body>
</html>