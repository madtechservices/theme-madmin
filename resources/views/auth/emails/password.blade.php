    {{-- password.blade.php - Password - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
<p class="text-gray-700">
    {{ trans('backpack::base.click_here_to_reset') }}: 
    <a href="{{ $link = backpack_url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}" class="text-blue-500 hover:text-blue-700 underline">
        {{ $link }}
    </a>
</p>