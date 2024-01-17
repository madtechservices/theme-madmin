    {{-- reset.blade.php - Reset - Backpack For Laravel Admin Panel
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
                            <div class="text-gray-500 py-2 px-4" role="tab">{{ trans('backpack::base.step') }} 1</div>
                        </li>
                        <li class="mr-1" role="presentation">
                            <div class="bg-blue-500 text-white py-2 px-4" role="tab">{{ trans('backpack::base.step') }} 2 — {{ trans('backpack::base.choose_new_password') }}</div>
                        </li>
                        @includeWhen(backpack_theme_config('options.showColorModeSwitcher'), backpack_view('layouts.partials.switch_theme'))
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
                                <form class="p-t-10" role="form" method="POST" action="{{ route('backpack.auth.password.reset') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="mb-3">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">{{ trans('backpack::base.email_address') }}</label>
                                        <input autofocus type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('email') ? 'border-red-500' : '' }}" name="email" id="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <div class="text-red-500 text-xs italic">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">{{ trans('backpack::base.password') }}</label>
                                        <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('password') ? 'border-red-500' : '' }}" name="password" id="password" value="">
                                        @if ($errors->has('password'))
                                            <div class="text-red-500 text-xs italic">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">{{ trans('backpack::base.confirm_password') }}</label>
                                        <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('password_confirmation') ? 'border-red-500' : '' }}" name="password_confirmation" id="password_confirmation" value="">
                                        @if ($errors->has('password_confirmation'))
                                            <div class="text-red-500 text-xs italic">{{ $errors->first('password_confirmation') }}</div>
                                        @endif
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                                            {{ trans('backpack::base.change_password') }}
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
