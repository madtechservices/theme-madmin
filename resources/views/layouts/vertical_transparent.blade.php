<!DOCTYPE html>
    {{-- vertical_transparent.blade.php - Vertical Transparent - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body class="{{ backpack_theme_config('classes.body') }}" bp-layout="vertical-transparent">

@include(backpack_view('layouts.partials.light_dark_mode_logic'))

<div class="page">

    @include(backpack_view('layouts._vertical_transparent.menu_container'))

    <div class="page-wrapper">

        <div class="@if(backpack_theme_config('options.useStickyHeader')) sticky top-0 @endif">
            @include(backpack_view('layouts._vertical_transparent.header_container'))
        </div>

        <div class="page-body">
            <main class="{{ backpack_theme_config('options.useFluidContainers') ? 'w-full' : 'max-w-screen-xl mx-auto' }}">

                @yield('before_breadcrumbs_widgets')
                @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))
                @yield('after_breadcrumbs_widgets')
                @yield('header')

                <div class="w-full animate__fadeIn">
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