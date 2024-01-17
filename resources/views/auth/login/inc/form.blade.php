    {{-- form.blade.php - Login Form - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@section('after_scripts')
<script type="module">
    let input = document.querySelector('.password-visibility-toggler input');
    let buttons = document.querySelectorAll('.password-visibility-toggler a');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            buttons.forEach(b => b.classList.toggle('hidden'));
            input.type = input.type === 'password' ? 'text' : 'password';
            input.focus();
        });
    });
</script>
@endsection

<h2 class="text-2xl text-center my-4">{{ trans('backpack::base.login') }}</h2>
<form method="POST" action="{{ route('backpack.auth.login') }}" autocomplete="off" novalidate="">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="{{ $username }}">{{ trans('backpack::base.'.strtolower(config('backpack.base.authentication_column_name'))) }}</label>
        <input autofocus tabindex="1" type="text" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}" class="form-control {{ $errors->has($username) ? 'border-red-500' : '' }}">
        @if ($errors->has($username))
            <div class="text-red-500">{{ $errors->first($username) }}</div>
        @endif
    </div>
    <div class="mb-2">
        <label class="form-label" for="password">
            {{ trans('backpack::base.password') }}
        </label>
        <div class="input-group input-group-flat password-visibility-toggler">
            <input tabindex="2" type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'border-red-500' : '' }}" value="">
            @if(backpack_theme_config('options.showPasswordVisibilityToggler'))
            <span class="input-group-text p-0 px-2">
                <a href="#" data-input-type="text" class="text-gray-500 p-2" data-bs-toggle="tooltip" aria-label="{{ trans('backpack.theme-tabler::theme-tabler.password-show') }}" data-bs-original-title="{{ trans('backpack.theme-tabler::theme-tabler.password-show') }}">
                    <!-- SVG icon -->
                </a>
                <a href="#" data-input-type="password" class="text-gray-500 p-2 hidden" data-bs-toggle="tooltip" aria-label="{{ trans('backpack.theme-tabler::theme-tabler.password-hide') }}" data-bs-original-title="{{ trans('backpack.theme-tabler::theme-tabler.password-hide') }}">
                    <!-- SVG icon -->
                </a>
            </span>
            @endif
        </div>
        @if ($errors->has('password'))
            <div class="text-red-500">{{ $errors->first('password') }}</div>
        @endif
    </div>
    <div class="flex justify-between items-center mb-2">
        <label class="inline-flex items-center">
            <input name="remember" tabindex="3" type="checkbox" class="form-checkbox">
            <span class="ml-2">{{ trans('backpack::base.remember_me') }}</span>
        </label>
        @if (backpack_users_have_email() && backpack_email_column() == 'email' && config('backpack.base.setup_password_recovery_routes', true))
            <div class="text-sm">
                <a tabindex="4" href="{{ route('backpack.auth.password.reset') }}" class="text-blue-500 hover:text-blue-700">{{ trans('backpack::base.forgot_your_password') }}</a>
            </div>
        @endif
    </div>
    <div class="mt-4">
        <button tabindex="5" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">{{ trans('backpack::base.login') }}</button>
    </div>
</form>