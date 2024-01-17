    {{-- form.blade.php - Included Form - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
<h2 class="text-center my-4 text-2xl">{{ trans('backpack::base.register') }}</h2>
<form role="form" method="POST" action="{{ route('backpack.auth.register') }}">
    @csrf
    <div class="mb-3">
        <label class="block text-gray-700" for="name">{{ trans('backpack::base.name') }}</label>
        <input autofocus tabindex="1" type="text" class="form-input mt-1 block w-full {{ $errors->has('name') ? 'border-red-500' : '' }}" name="name" id="name" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('name') }}</p>
        @endif
    </div>

    <div class="mb-3">
        <label class="block text-gray-700" for="{{ backpack_authentication_column() }}">{{ trans('backpack::base.'.strtolower(config('backpack.base.authentication_column_name'))) }}</label>
        <input tabindex="2" type="{{ backpack_authentication_column()==backpack_email_column()?'email':'text'}}" class="form-input mt-1 block w-full {{ $errors->has(backpack_authentication_column()) ? 'border-red-500' : '' }}" name="{{ backpack_authentication_column() }}" id="{{ backpack_authentication_column() }}" value="{{ old(backpack_authentication_column()) }}">
        @if ($errors->has(backpack_authentication_column()))
            <p class="text-red-500 text-xs italic">{{ $errors->first(backpack_authentication_column()) }}</p>
        @endif
    </div>

    <div class="mb-3">
        <label class="block text-gray-700" for="password">{{ trans('backpack::base.password') }}</label>
        <input tabindex="3" type="password" class="form-input mt-1 block w-full {{ $errors->has('password') ? 'border-red-500' : '' }}" name="password" id="password" value="">
        @if ($errors->has('password'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('password') }}</p>
        @endif
    </div>

    <div class="mb-4">
        <label class="block text-gray-700" for="password_confirmation">{{ trans('backpack::base.confirm_password') }}</label>
        <input tabindex="4" type="password" class="form-input mt-1 block w-full {{ $errors->has('password_confirmation') ? 'border-red-500' : '' }}" name="password_confirmation" id="password_confirmation" value="">
        @if ($errors->has('password_confirmation'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('password_confirmation') }}</p>
        @endif
    </div>

    <div class="form-group">
        <div>
            <button tabindex="5" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                {{ trans('backpack::base.register') }}
            </button>
        </div>
    </div>
</form>