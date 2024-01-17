    {{-- widgets.blade.php - Widgets - Backpack For Laravel Admin Panel
    MADmin - Version 0.0.017A 
    Notes: 17-01-2024 - Changed to Tailwind CSS
    Copyright MAD Tech Services | 2013-2024
     --}}
     
@if (!empty($widgets))
	@foreach ($widgets as $currentWidget)

		@if (is_array($currentWidget))
			@php
				$currentWidget = \Backpack\CRUD\app\Library\Widget::add($currentWidget);
			@endphp
		@endif

		@include($currentWidget->getFinalViewPath(), ['widget' => $currentWidget->toArray()])

	@endforeach
@endif
