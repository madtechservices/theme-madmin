    {{-- header_container.blade.php - Horizontal Header Container - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
<header data-bs-theme={{ $theme ?? 'system' }} class="print:hidden {{ backpack_theme_config('classes.topHeader') ?? 'hidden lg:block px-3 bg-'.($theme ?? 'light') }}">
    <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container mx-auto' : 'container mx-auto' }}">
        <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container mx-auto' : 'container mx-auto' }} flex items-center justify-between">
            <a class="text-2xl text-decoration-none mb-0" href="{{ url(backpack_theme_config('home_link')) }}" title="{{ backpack_theme_config('project_name') }}">
                {!! backpack_theme_config('project_logo') !!}
            </a>
            <div class="flex flex-row">
                @include(backpack_view('inc.menu'))
            </div>
        </div>
    </div>
</header>