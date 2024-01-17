    {{-- cover.blade.php - Authentication Registeration Cover - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="flex flex-col lg:flex-row h-full">
        <div class="w-full lg:w-1/2 xl:w-1/3 border-t-8 border-primary flex flex-col justify-center">
            <div class="my-5 px-5 lg:px-20">
                <div class="text-center mb-4 text-3xl">
                    {!! backpack_theme_config('project_logo') !!}
                </div>
                @include(backpack_view('auth.register.inc.form'))
                @if (config('backpack.base.registration_open'))
                    <div class="text-center text-gray-500 mt-4">
                        <a tabindex="6" href="{{ route('backpack.auth.login') }}" class="text-blue-500 hover:text-blue-700">{{ trans('backpack::base.login') }}</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2 xl:w-2/3 h-full min-h-screen bg-cover" style="background-image: url(https://preview.tabler.io/static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg)"></div>
    </div>
@endsection