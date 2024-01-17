    {{-- menu.blade.php - Menu - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
{{-- Top menu items (ordered left) --}}
@if (backpack_auth()->check())
    <ul class="flex md:hidden">
        {{-- Topbar. Contains the left part --}}
        @include(backpack_view('inc.topbar_left_content'))
    </ul>
@endif

{{-- Top menu right items (ordered right) --}}
<ul class="flex flex-row flex-shrink-0 @if(backpack_theme_config('html_direction') == 'rtl') space-x-0 @endif">
    @if (backpack_auth()->guest())
        <li class="nav-item">
            <a class="text-gray-600 hover:text-gray-900" href="{{ route('backpack.auth.login') }}">{{ trans('backpack::base.login') }}</a>
        </li>
        @if (config('backpack.base.registration_open'))
            <li class="nav-item">
                <a class="text-gray-600 hover:text-gray-900" href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a>
            </li>
        @endif
    @else
        {{-- Topbar. Contains the right part --}}
        <li class="nav-item">
            @includeWhen(backpack_theme_config('options.showColorModeSwitcher'), backpack_view('layouts.partials.switch_theme'))
        </li>
        @include(backpack_view('inc.topbar_right_content'))
        @include(backpack_view('inc.menu_user_dropdown'))
    @endif
</ul>
