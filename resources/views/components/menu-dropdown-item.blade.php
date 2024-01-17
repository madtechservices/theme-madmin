    {{-- menu-dropdown-item.blade.php - Components Menu Item Dropdown - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     

<a {{ $attributes->merge(['class' => 'block text-gray-600 hover:text-gray-900', 'href' => $link]) }}>
    @if($icon)<i class="{{ $icon }} block lg:hidden xl:block"></i>@endif
    @if($title)<span>{{ $title }}</span>@endif
</a>