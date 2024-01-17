    {{-- progress_white.blade.php - Progress White Blade - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@php
  // defaults; backwards compatibility with Backpack 4.0 widgets
  $widget['wrapper']['class'] = $widget['wrapper']['class'] ?? $widget['wrapperClass'] ?? 'sm:col-span-6 lg:col-span-3';
  $accentColor = $widget['accentColor'] ?? 'blue';
@endphp

@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_start'))
  <div class="{{ $widget['class'] ?? 'card' }} bg-white shadow rounded-lg">
    @if ($widget['ribbon'] ?? false)
        <div class="ribbon ribbon-{{ $widget['ribbon'][0] ?? 'top' }} bg-{{ $accentColor }} @if(($widget['ribbon'][0] ?? '') === 'bottom') mb-3 @endif">
            <i class="la {{ $widget['ribbon'][1] ?? '' }} fs-3"></i>
        </div>
    @endif
    <div class="card-body p-4">
      @if (isset($widget['value']))
        <div class="text-4xl mb-3 @if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['value'] !!}</div>
      @endif

      @if (isset($widget['description']))
        <div class="card-text text-gray-500 @if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['description'] !!}</div>
      @endif

      @if (isset($widget['progress']))
        <div class="h-1 rounded overflow-hidden bg-gray-300 my-2">
          <div class="{{ $widget['progressClass'] ?? 'progress-bar' }} bg-{{$accentColor}}" style="width: {{ $widget['progress']  }}%" role="progressbar" aria-valuenow="{{ $widget['progress']  }}" aria-valuemin="0" aria-valuemax="100" aria-label="{{ $widget['progress']  }}% Complete">
              <span class="visually-hidden">{{ $widget['progress']  }}% Complete</span>
          </div>
        </div>
      @endif

      @if (isset($widget['hint']))
        <div class="d-flex mb-2">
            <div class="subheader @if(($widget['ribbon'][0] ?? '') === 'bottom') pe-3 @endif">{!! $widget['hint'] !!}</div>
        </div>
      @endif
    </div>

    @if (isset($widget['footer_link']))
      <div class="card-footer px-3 py-2 bg-gray-100 rounded-b-lg">
        <a class="btn-block text-gray-500 d-flex justify-between items-center" href="{{ $widget['footer_link'] ?? '#' }}"><span class="small font-bold">{{ $widget['footer_text'] ?? 'View more' }}</span><i class="la la-angle-right"></i></a>
      </div>
    @endif
  </div>
@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_end'))