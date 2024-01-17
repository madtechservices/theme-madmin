    {{-- blank.blade.php - Errors Blank - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ trans('backpack::base.error_page.title', ['error' => $error_number]) }}</title>

        @include(backpack_view('inc.theme_styles'))
        @include(backpack_view('inc.styles'))
    </head>
    <body>
      @yield('content')
    </body>
</html>
