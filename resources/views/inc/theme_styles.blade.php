    {{-- theme_styles.blade.php - Theme Styles - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
{{-- 
    we use a render blocking script in <head> to force the theme attribute to be in the document before it renders 
    avoiding white flicks when for example, using the dark color mode.
--}}
<script>document.documentElement.setAttribute("data-bs-theme", localStorage.colorMode ?? 'light');</script>

@basset('https://unpkg.com/@tabler/core@1.0.0-beta19/dist/css/tabler.min.css')
@basset(base_path('vendor/backpack/theme-tabler/resources/assets/css/style.css'))