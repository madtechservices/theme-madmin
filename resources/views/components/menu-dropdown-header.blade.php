    {{-- menu-dropdown-header.blade.php - Components Menu Dropdown - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     

<h6 {{ $attributes->merge(['class' => 'text-gray-500 uppercase tracking-wider']) }}>
    @if($icon)<i class="{{ $icon }} block lg:hidden xl:block"></i>@endif
    @if($title)<span>{{ $title }}</span>@endif
</h6>