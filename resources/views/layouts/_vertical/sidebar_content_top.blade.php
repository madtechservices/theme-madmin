    {{-- sidebar_content_top.blade.php - Vertical Sidebar Content Top - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@if($auth ?? true)
    @if (backpack_auth()->guest())
        <li class="flex items-center">
            <a class="flex items-center" href="{{ route('backpack.auth.login') }}">
                <i class="nav-icon la la-sign-in-alt block lg:hidden xl:block"></i> <span>{{ trans('backpack::base.login') }}</span>
            </a>
        </li>
    @else
        <li class="flex items-center relative">
            <a class="flex items-center cursor-pointer" href="#" role="button" aria-expanded="true">
                <span class="flex items-center rounded-full mr-2">
                    <img class="rounded-full bg-transparent absolute left-0 z-10" src="{{ backpack_avatar_url(backpack_auth()->user()) }}"
                        alt="{{ backpack_auth()->user()->name }}" onerror="this.style.display='none'">
                    <span class="flex items-center justify-center rounded-full backpack-avatar-menu-container">
                        {{ backpack_user()->getAttribute('name') ? mb_substr(backpack_user()->name, 0, 1, 'UTF-8') : 'A' }}
                    </span>
                </span>
                {{ backpack_user()->name }}
            </a>
            <div class="absolute mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                @if(config('backpack.base.setup_my_account_routes'))
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ route('backpack.account.info') }}">
                        <i class="nav-icon la la-lock block"></i>
                        {{ trans('backpack::base.my_account') }}
                    </a>
                @endif
                <a class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100" href="{{ backpack_url('logout') }}">
                    <i class="nav-icon la la-sign-out-alt block"></i>
                    {{ trans('backpack::base.logout') }}
                </a>
            </div>
        </li>
    @endif
    <li class="border-t border-gray-200"></li>
@endif

{{--
    IMPORTANT NOTE!
    @include(backpack_view('inc.topbar_left_content')) in no longer used!
--}}