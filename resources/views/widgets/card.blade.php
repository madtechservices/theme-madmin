    {{-- card.blade.php - Card Page - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@php
    // defaults; backwards compatibility with Backpack 4.0 widgets
    $widget['wrapper']['class'] = $widget['wrapper']['class'] ?? $widget['wrapperClass'] ?? 'sm:col-span-6 lg:col-span-4';
    $accentColor = $widget['accentColor'] ?? 'blue';
@endphp

@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_start'))
<div class="{{ $widget['class'] ?? 'card' }} bg-white shadow rounded-lg">

    @if ($widget['ribbon'] ?? false)
        <div class="ribbon ribbon-{{ $widget['ribbon'][0] ?? 'top' }} bg-{{ $accentColor }} @if(($widget['ribbon'][0] ?? '') === 'bottom') mb-4 @endif">
            <i class="la {{ $widget['ribbon'][1] ?? '' }} fs-3"></i>
        </div>
    @endif

    @if ($widget['statusBorder'] ?? false)
        <div class="card-status-{{ $widget['statusBorder'] }} bg-{{ $accentColor }}"></div>
    @endif

    <div class="card-body p-4">
        @if (isset($widget['content']['header']))
            <div class="card-title text-2xl @if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['content']['header'] !!}</div>
        @endif

        @if (isset($widget['content']['body']))
            <div class="text-gray-500 @if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['content']['body'] !!}</div>
        @endif

    </div>

    @if (isset($widget['content']['link']))
        <div class="card-footer px-3 py-2 bg-gray-100 rounded-b-lg">
            <a class="btn-block text-gray-500 d-flex justify-between items-center" href="{{ $widget['content']['link']['href'] ?? '#' }}">
                <span class="small font-bold text-{{ $accentColor }}">{{ $widget['content']['link']['labelText'] ?? 'View more' }}</span><i class="la la-angle-right text-{{ $accentColor }}"></i></a>
        </div>
    @endif
</div>
@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_end'))
