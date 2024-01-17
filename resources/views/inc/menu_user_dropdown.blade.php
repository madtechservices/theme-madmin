    {{-- menu_user_dropdown.blade.php - User Dropdown Menu - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     

<div class="relative group">
    <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-gray-900" aria-label="Open user menu">
        <span class="relative w-6 h-6">
            <img class="absolute inset-0 w-full h-full rounded-full object-cover bg-transparent" src="{{ backpack_avatar_url(backpack_auth()->user()) }}"
                alt="{{ backpack_auth()->user()->name }}" onerror="this.style.display='none'">
            <span class="absolute inset-0 flex items-center justify-center text-white">
                {{ backpack_user()->getAttribute('name') ? mb_substr(backpack_user()->name, 0, 1, 'UTF-8') : 'A' }}
            </span>
        </span>
        <div class="hidden xl:flex flex-col space-y-1">
            <div>{{ backpack_user()->name }}</div>
            <div class="text-xs text-gray-500">{{ trans('backpack::crud.admin') }}</div>
        </div>
    </a>
    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 text-gray-700 ring-1 ring-black ring-opacity-5 overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
        @if(config('backpack.base.setup_my_account_routes'))
            <a href="{{ route('backpack.account.info') }}" class="flex items-center px-4 py-2 text-sm"><i class="la la-user mr-2"></i>{{ trans('backpack::base.my_account') }}</a>
            <div class="border-t border-gray-100"></div>
        @endif
        <a href="{{ backpack_url('logout') }}" class="flex items-center px-4 py-2 text-sm"><i class="la la-lock mr-2"></i>{{ trans('backpack::base.logout') }}</a>
    </div>
</div>