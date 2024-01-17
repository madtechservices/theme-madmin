    {{-- menu_container.blade.php - Vertical Dark Menu Container - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@extends(backpack_view('layouts._vertical.menu_container'), [
    'theme' => 'dark',
    'class' => 'bg-gray-800 text-white',
])