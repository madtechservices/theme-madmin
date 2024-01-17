<!DOCTYPE html>
    {{-- right_vertical_transparent.blade.php - Layouts Right Vertical Transparent - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body class="{{ backpack_theme_config('classes.body') }}" bp-layout="right-vertical-transparent">

@include(backpack_view('layouts.partials.light_dark_mode_logic'))

<div class="h-screen flex overflow-hidden bg-gray-100">

    @include(backpack_view('layouts._right_vertical_transparent.menu_container'))

    <div class="flex flex-col w-0 flex-1 overflow-hidden">

        <div class="{{ backpack_theme_config('options.useStickyHeader') ? 'sticky top-0' : '' }}">
            @include(backpack_view('layouts._right_vertical_transparent.header_container'))
        </div>

        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none {{ backpack_theme_config('options.useFluidContainers') ? 'w-full' : 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8' }}">

            @yield('before_breadcrumbs_widgets')
            @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))
            @yield('after_breadcrumbs_widgets')
            @yield('header')

            <div class="animate-fade-in">
                @yield('before_content_widgets')
                @yield('content')
                @yield('after_content_widgets')
            </div>
        </main>

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