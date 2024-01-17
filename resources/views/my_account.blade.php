    {{-- my_account.blade.php - My Account Page - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
    @if (session('success'))
    <div class="w-full lg:w-2/3 mb-4">
        <div class="alert alert-success bg-green-500 text-white p-3 rounded">
            {{ session('success') }}
        </div>
    </div>
    @endif

    @if ($errors->count())
    <div class="w-full lg:w-2/3 mb-4">
        <div class="alert alert-danger bg-red-500 text-white p-3 rounded">
            <ul class="mb-1">
                @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    {{-- UPDATE INFO FORM --}}
    <div class="w-full lg:w-2/3 mb-4">
        <form class="form" action="{{ route('backpack.account.info.store') }}" method="post">

            {!! csrf_field() !!}

            <div class="card bg-white shadow rounded-lg">

                <div class="card-header bg-gray-100 rounded-t-lg p-4">
                    <h3 class="text-lg font-semibold">{{ trans('backpack::base.update_account_info') }}</h3>
                </div>

                <div class="card-body p-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group">
                            @php
                                $label = trans('backpack::base.name');
                                $field = 'name';
                            @endphp
                            <label class="required">{{ $label }}</label>
                            <input required class="form-control border-gray-300 rounded p-2" type="text" name="{{ $field }}" value="{{ old($field) ? old($field) : $user->$field }}">
                        </div>

                        <div class="form-group">
                            @php
                                $label = trans('backpack::base.'.strtolower(config('backpack.base.authentication_column_name')));
                                $field = backpack_authentication_column();
                            @endphp
                            <label class="required">{{ $label }}</label>
                            <input required class="form-control border-gray-300 rounded p-2" type="{{ backpack_authentication_column()==backpack_email_column()?'email':'text' }}" name="{{ $field }}" value="{{ old($field) ? old($field) : $user->$field }}">
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-gray-100 rounded-b-lg p-4">
                    <button type="submit" class="btn btn-success bg-green-500 text-white rounded p-2"><i class="la la-save"></i> {{ trans('backpack::base.save') }}</button>
                    <a href="{{ backpack_url() }}" class="btn bg-gray-300 text-black rounded p-2">{{ trans('backpack::base.cancel') }}</a>
                </div>
            </div>

        </form>
    </div>

{{-- CHANGE PASSWORD FORM --}}
<div class="w-full lg:w-2/3 mb-4">
    <form class="form" action="{{ route('backpack.account.password') }}" method="post">

        {!! csrf_field() !!}

        <div class="card bg-white shadow rounded-lg">

            <div class="card-header bg-gray-100 rounded-t-lg p-4">
                <h3 class="text-lg font-semibold">{{ trans('backpack::base.change_password') }}</h3>
            </div>

            <div class="card-body p-4">
                <div class="grid grid-cols-3 gap-4">
                    <div class="form-group">
                        @php
                            $label = trans('backpack::base.old_password');
                            $field = 'old_password';
                        @endphp
                        <label class="required">{{ $label }}</label>
                        <input autocomplete="new-password" required class="form-control border-gray-300 rounded p-2" type="password" name="{{ $field }}" id="{{ $field }}" value="">
                    </div>

                    <div class="form-group">
                        @php
                            $label = trans('backpack::base.new_password');
                            $field = 'new_password';
                        @endphp
                        <label class="required">{{ $label }}</label>
                        <input autocomplete="new-password" required class="form-control border-gray-300 rounded p-2" type="password" name="{{ $field }}" id="{{ $field }}" value="">
                    </div>

                    <div class="form-group">
                        @php
                            $label = trans('backpack::base.confirm_password');
                            $field = 'confirm_password';
                        @endphp
                        <label class="required">{{ $label }}</label>
                        <input autocomplete="new-password" required class="form-control border-gray-300 rounded p-2" type="password" name="{{ $field }}" id="{{ $field }}" value="">
                    </div>
                </div>
            </div>

            <div class="card-footer bg-gray-100 rounded-b-lg p-4">
                <button type="submit" class="btn btn-success bg-green-500 text-white rounded p-2"><i class="la la-save"></i> {{ trans('backpack::base.change_password') }}</button>
                <a href="{{ backpack_url() }}" class="btn bg-gray-300 text-black rounded p-2">{{ trans('backpack::base.cancel') }}</a>
            </div>

        </div>

    </form>
</div>

</div>
@endsection