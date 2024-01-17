<!DOCTYPE html>
    {{-- horizontal_overlap.blade.php - Layout Horizontal Overlap - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body class="{{ backpack_theme_config('classes.body') }}" bp-layout="horizontal-overlap">

@include(backpack_view('layouts.partials.light_dark_mode_logic'))

<div class="h-screen flex overflow-hidden bg-gray-100">
    <div class="flex flex-col w-0 flex-1 overflow-hidden">

        @includeWhen(backpack_theme_config('options.doubleTopBarInHorizontalLayouts'), backpack_view('layouts._horizontal_overlap.header_container'))
        @include(backpack_view('layouts._horizontal_overlap.menu_container'))

        <div class="relative flex-1 flex flex-col max-w-7xl mx-auto w-full">
            <main class="{{ backpack_theme_config('options.useFluidContainers') ? 'w-full' : 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8' }}">

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