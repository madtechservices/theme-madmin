<!DOCTYPE html>
    {{-- horizontal_dark.blade.php - Horizontal Dark - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body class="{{ backpack_theme_config('classes.body') }}" bp-layout="horizontal-dark">

@include(backpack_view('layouts.partials.light_dark_mode_logic'))

<div class="h-screen flex overflow-hidden bg-gray-100">
    <div class="flex flex-col w-0 flex-1 overflow-hidden">

        <div class="@if(backpack_theme_config('options.useStickyHeader')) sticky top-0 z-50 @endif">
            @includeWhen(backpack_theme_config('options.doubleTopBarInHorizontalLayouts'), backpack_view('layouts._horizontal_dark.header_container'))
            @include(backpack_view('layouts._horizontal_dark.menu_container'))
        </div>

        <div class="relative flex-1 flex overflow-hidden">
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none {{ backpack_theme_config('options.useFluidContainers') ? 'max-w-full' : 'max-w-7xl mx-auto' }}">

                @yield('before_breadcrumbs_widgets')
                @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))
                @yield('after_breadcrumbs_widgets')
                @yield('header')

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