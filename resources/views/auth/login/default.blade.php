    {{-- default.blade.php - Default Login - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md py-4">
            <div class="text-center mb-4 text-3xl">
                {!! backpack_theme_config('project_logo') !!}
            </div>
            <div class="bg-white shadow-md rounded-lg">
                <div class="px-4 py-2">
                    @include(backpack_view('auth.login.inc.form'))
                </div>
            </div>
            @if (config('backpack.base.registration_open'))
                <div class="text-center text-gray-500 mt-4">
                    <a tabindex="6" href="{{ route('backpack.auth.register') }}" class="text-blue-500 hover:text-blue-700">{{ trans('backpack::base.register') }}</a>
                </div>
            @endif
        </div>
    </div>
@endsection