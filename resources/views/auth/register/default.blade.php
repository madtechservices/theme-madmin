    {{-- default.blade.php - Authentication Registration Default - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-md px-4 py-8">
            <div class="text-center mb-4">
                {!! backpack_theme_config('project_logo') !!}
            </div>
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @include(backpack_view('auth.register.inc.form'))
            </div>
            <div class="text-center mt-4">
                <a tabindex="6" href="{{ route('backpack.auth.login') }}" class="text-blue-500 hover:text-blue-700">{{ trans('backpack::base.login') }}</a>
            </div>
        </div>
    </div>
@endsection