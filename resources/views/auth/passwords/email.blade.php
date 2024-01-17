    {{-- email.blade.php - email - Backpack For Laravel Admin Panel
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
                    <ul class="flex border-b" role="tablist">
                        <li class="mr-1" role="presentation">
                            <div class="bg-blue-500 text-white py-2 px-4" role="tab">{{ trans('backpack::base.step') }} 1 — {{ trans('backpack::base.confirm_email') }}</div>
                        </li>
                        <li class="mr-1" role="presentation">
                            <div class="text-gray-500 py-2 px-4" role="tab">{{ trans('backpack::base.step') }} 2</div>
                        </li>
                        <li class="ml-auto" role="presentation">
                            @includeWhen(backpack_theme_config('options.showColorModeSwitcher'), backpack_view('layouts.partials.switch_theme'))
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-2">
                    <h3 class="mb-3 text-xl">{{ trans('backpack::base.reset_password') }}</h3>
                    <div>
                        <div role="tabpanel">
                            @if (session('status'))
                                <div class="alert alert-success mt-3">
                                    {{ session('status') }}
                                </div>
                            @else
                                <form class="p-t-10" role="form" method="POST" action="{{ route('backpack.auth.password.email') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">{{ trans('backpack::base.email_address') }}</label>
                                        <input autofocus type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('email') ? 'border-red-500' : '' }}" name="email" id="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <div class="text-red-500 text-xs italic">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                                                <path d="M3 7l9 6l9 -6"></path>
                                            </svg>
                                            {{ trans('backpack::base.send_reset_link') }}
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-3">
                <a href="{{ route('backpack.auth.login') }}">{{ trans('backpack::base.login') }}</a>
                @if (config('backpack.base.registration_open'))
                    / <a href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a>
                @endif
            </div>
        </div>
    </div>
@endsection