    {{-- breadcrumbs.blade.php - Breadcrumbs - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@if (backpack_theme_config('breadcrumbs') && isset($breadcrumbs) && is_array($breadcrumbs) && count($breadcrumbs))
    <nav aria-label="breadcrumb" class="hidden lg:block">
        <ol class="flex list-none bg-transparent p-0 mx-3 {{ backpack_theme_config('html_direction') == 'rtl' ? 'justify-start' : 'justify-end' }}">
            @foreach ($breadcrumbs as $label => $link)
                @if ($link)
                    <li class="text-capitalize"><a href="{{ $link }}" class="text-blue-500 hover:text-blue-700">{{ $label }}</a></li>
                @else
                    <li class="text-capitalize text-gray-500" aria-current="page">{{ $label }}</li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
