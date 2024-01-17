    {{-- layout.blade.php - Errors Layout - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@extends(backpack_view(backpack_user() && backpack_theme_config('layout') ? 'layouts.'.backpack_theme_config('layout') : 'errors.blank'))

@section('content')
<style>
.navbar-overlap:after { height: 0; }
</style>
<div class="empty">
  <div class="empty-header text-4xl">{{ $error_number }}</div>
    <p class="empty-title text-2xl">@yield('title')</p>
    <p class="empty-subtitle text-secondary text-lg">@yield('description')</p>
    <div class="empty-action">
      <a href="./." class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l14 0"></path><path d="M5 12l6 6"></path><path d="M5 12l6 -6"></path></svg>
        {{ trans('backpack::base.error_page.button') }}
      </a>
    </div>
  </div>
</div>
@endsection