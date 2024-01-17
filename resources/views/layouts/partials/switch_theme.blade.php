    {{-- switch_theme.blade.php - Switch Theme Module - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@foreach(backpack_theme_config('options.colorModes') as $mode => $icon)
@php
    $description = trans('backpack.theme-tabler::theme-tabler.color-mode-description', [
        'mode' => trans('backpack.theme-tabler::theme-tabler.color-mode-'.$mode),
    ]);
@endphp
<button
    onclick="colorMode.switch()"
    class="text-gray-600 border-none decoration-none shadow-none nav-link hidden show-theme-{{ $mode }}"
    data-bs-toggle="tooltip"
    data-bs-placement="bottom"
    aria-label="{{ $description }}"
    data-bs-original-title="{{ $description }}">
    <i class="la {{ $icon }} text-xl m-0"></i>
</button>
@endforeach
