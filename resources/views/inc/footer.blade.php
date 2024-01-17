    {{-- footer.blade.php - Footer - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@if (backpack_theme_config('show_powered_by') || backpack_theme_config('developer_link'))
    <footer class="print:hidden {{ backpack_theme_config('classes.footer') ?? 'bg-transparent p-3 border-t-0' }}">
        <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container mx-auto px-6' : 'container mx-auto px-6' }}">
            <div class="@if (backpack_theme_config('developer_link') && backpack_theme_config('developer_name') && backpack_theme_config('show_powered_by')) flex flex-row-reverse @endif text-center items-center">
                @if (backpack_theme_config('show_powered_by'))
                    <div class="lg:ml-auto">
                        <ul class="list-none mb-0">
                            <li class="inline-block">
                                {{ trans('backpack::base.powered_by') }}
                                <a href="https://backpackforlaravel.com?ref=panel_footer_link" rel="noopener" target="_blank">Backpack for Laravel</a>.
                            </li>
                        </ul>
                    </div>
                @endif
                @if (backpack_theme_config('developer_link') && backpack_theme_config('developer_name'))
                    <div class="mt-3 lg:mt-0">
                        <ul class="list-none mb-0">
                            <li class="inline-block">
                                {{ trans('backpack::base.handcrafted_by') }}
                                <a href="{{ backpack_theme_config('developer_link') }}" rel="noopener" target="_blank">{{ backpack_theme_config('developer_name') }}</a>.
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </footer>
@endif