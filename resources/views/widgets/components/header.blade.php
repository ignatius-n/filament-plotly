{{--@props(['heading', 'subheading', 'filters', 'indicatorsCount', 'width', 'filterFormAccessible'])--}}
@props(['heading', 'subheading', 'width'])
<div class="filament-plotly-header">
	@if ($heading || $subheading )
		<div class="sm:flex justify-between gap-4 py-2 relative">

			<div>
				@if ($heading)
					<div class="filament-plotly-heading text-base font-semibold leading-6">
						{!! $heading !!}
					</div>
				@endif

				@if ($subheading)
					<div class="filament-plotly-subheading text-sm text-gray-600 dark:text-gray-300">
						{!! $subheading !!}
					</div>
				@endif
			</div>

{{--			<div>--}}
{{--				@if ($filters)--}}
{{--					<select wire:model.live="filter" @class([--}}
{{--                        'echarts-single-filter w-full text-gray-900 border-gray-300 block h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 dark:focus:border-primary-500',--}}
{{--                    ]) wire:loading.class="animate-pulse">--}}
{{--						@foreach ($filters as $value => $label)--}}
{{--							<option value="{{ $value }}">--}}
{{--								{{ $label }}--}}
{{--							</option>--}}
{{--						@endforeach--}}
{{--					</select>--}}
{{--				@endif--}}
{{--			</div>--}}

{{--			@if ($filterFormAccessible)--}}
{{--				<div>--}}

{{--					<x-filament-echarts::filter-form :indicatorsCount=$indicatorsCount :width=$width>--}}
{{--						{{ $filterForm }}--}}
{{--					</x-filament-echarts::filter-form>--}}

{{--				</div>--}}
{{--			@endif--}}

		</div>
	@endif
</div>