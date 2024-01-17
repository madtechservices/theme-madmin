    {{-- menu-dropdown.blade.php - Components Dropdown Menu - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@if($nested)
    <div class="relative group">
        <a {{ $attributes->merge([
            'class' => 'inline-block text-gray-600 hover:text-gray-900',
            'href' => $link ?? '#',
            ]) }}>
            @if($icon)<i class="{{ $icon }} block lg:hidden xl:block"></i>@endif
            @if($title)<span>{{ $title }}</span>@endif
        </a>
        <div class="{{ $open ? 'block' : 'hidden' }} absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
            {!! $slot !!}
        </div>
    </div>

    <script type="text/javascript">
        // You may need to implement dropdown functionality with JavaScript
    </script>
@else
<li class="relative group">
    <a {{ $attributes->merge([
        'class' => 'inline-block text-gray-600 hover:text-gray-900',
        'href' => $link ?? '#',
    ]) }}>

        @if($icon)<i class="{{ $icon }} block lg:hidden xl:block"></i>@endif
        @if($title)<span>{{ $title }}</span>@endif
    </a>
    <div class="{{ $open ? 'block' : 'hidden' }} absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
    {!! $slot !!}
    </div>
</li>
@endif