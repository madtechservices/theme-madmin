    {{-- menu_container.blade.php - Horizontal Custom Menu Container - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     

<header data-bs-theme={{ $theme ?? 'system' }} class="{{ backpack_theme_config('classes.menuHorizontalContainer') ?? 'flex flex-col top' }}">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="d-print-none {{ backpack_theme_config('classes.menuHorizontalContent') ?? 'flex flex-col '.($theme ?? 'light').' '.(($overlap ?? false) ? 'overlap' : '') }}">
            <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container mx-auto' : 'container-xl mx-auto' }}">
                <ul class="flex flex-row">
                    @unless(backpack_theme_config('options.doubleTopBarInHorizontalLayouts'))
                        <li class="nav-brand">
                            <a class="flex items-center" href="{{ url(backpack_theme_config('home_link')) }}">
                                {!! backpack_theme_config('project_logo') !!}
                            </a>
                        </li>
                    @endunless
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
                @unless(backpack_theme_config('options.doubleTopBarInHorizontalLayouts'))
                    @include(backpack_view('inc.menu'))
                @endunless
            </div>
        </div>
    </div>
</header>

{{-- we use this here to display the mobile menu --}}
<aside data-bs-theme={{ $theme ?? 'system' }} class="flex flex-col {{ $theme ?? 'light' }} block lg:hidden">
    <div class="container mx-auto">
        <ul class="flex flex-row items-center justify-between w-full">
            @include(backpack_view('layouts.partials.mobile_toggle_btn'), ['forceWhiteLabelText' => true])
            <div class="flex flex-row items-center">
                @include(backpack_view('inc.topbar_left_content'))
                <li class="nav-item mr-2">
                    @includeWhen(backpack_theme_config('options.showColorModeSwitcher'), backpack_view('layouts.partials.switch_theme'))
                </li>
                @include(backpack_view('inc.topbar_right_content'))
                @include(backpack_view('inc.menu_user_dropdown'))
            </div>
        </ul>
        <div class="collapse navbar-collapse" id="mobile-menu">
            <ul class="flex flex-row pt-3 lg:pt-0">
                @include(backpack_view('inc.sidebar_content'))
            </ul>
        </div>
    </div>
</aside>