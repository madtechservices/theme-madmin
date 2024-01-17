    {{-- verify-email.blade.php - Authentication Verify Email - Backpack For Laravel Admin Panel
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
                <div class="mb-4">
                    {{ trans('backpack::base.verify_email.email_verification_required') }}

                    @if (session('status') == 'verification-link-sent')
                        <div class="mt-4">
                            <div class="alert alert-important alert-success my-0" role="alert">
                                <div class="flex">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    </div>
                                    <div>
                                        {{ trans('backpack::base.verify_email.verification_link_sent') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700" tabindex="6">{{ trans('backpack::base.verify_email.resend_verification_link') }}</button>   
                    </form>
                    <form method="POST" action="{{ backpack_url('logout') }}">
                        @csrf
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700" tabindex="7"><i class="la la-lock me-2"></i>{{ trans('backpack::base.logout') }}</button>   
                    </form>     
                </div>       
            </div>
        </div>
    </div>
@endsection