    {{-- menu_container.blade.php - Vertical Custom Menu Container - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     

@if (backpack_auth()->check())
    <aside data-bs-theme={{ $theme ?? 'system' }} class="{{ backpack_theme_config('classes.sidebar') ?? 'flex flex-col '.(($right ?? false) ? 'justify-end' : '').' bg-'.($theme ?? 'light') }} @if(backpack_theme_config('options.sidebarFixed')) fixed @endif">
        <div class="container mx-auto">
            <ul class="flex flex-row items-center justify-between w-full block lg:hidden">
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
            <h1 class="navbar-brand hidden lg:block self-center mb-3">
                <a class="h2 text-decoration-none mb-0" href="{{ url(backpack_theme_config('home_link')) }}" title="{{ backpack_theme_config('project_name') }}">
                    {!! backpack_theme_config('project_logo') !!}
                </a>
            </h1>
            @includeWhen($shortcuts ?? true, backpack_view('layouts.partials.sidebar_shortcuts'))
            <div class="collapse navbar-collapse" id="mobile-menu">
                <ul class="navbar-nav pt-lg-3">
                    @include(backpack_view('layouts._vertical.sidebar_content_top'))
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
            </div>
        </div>
    </aside>
@endif