    {{-- illustration.blade.php - Authentication Register Page with Illustration - Backpack For Laravel Admin Panel
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
            @if (config('backpack.base.registration_open'))
                <div class="text-center mt-4">
                    <a tabindex="6" href="{{ route('backpack.auth.login') }}" class="text-blue-500 hover:text-blue-700">{{ trans('backpack::base.login') }}</a>
                </div>
            @endif
        </div>
        <div class="hidden lg:block w-1/2">
            <img src="https://preview.tabler.io/static/illustrations/undraw_secure_login_pdn4.svg" height="300" class="mx-auto" alt="">
        </div>
    </div>
@endsection