import * as Plotly from 'plotly.js-dist'

export default function plotly({
								   chartData,
								   chartLayout,
								   chartConfig,
								   chartId,
								}) {
	return {
		chartData,
		chartLayout,
		chartConfig,
		chartId,
		init() {
			this.renderChart();

			// Re-render if Livewire updates the data
			this.$watch('chartData', () => this.renderChart());
			this.$watch('chartLayout', () => this.renderChart());
			this.$watch('chartConfig', () => this.renderChart());
			window.addEventListener('resize', () => Plotly.Plots.resize(
				document.querySelector(this.chartId)
			));
		},
		renderChart() {
			if(this.chartLayout.length === 0 && this.chartConfig.length === 0){
				Plotly.react(
					document.querySelector(this.chartId),
					this.chartData
				);
			}
			else
			{
				Plotly.react(
					document.querySelector(this.chartId),
					this.chartData,
					this.chartLayout,
					this.chartConfig
				);
			}
		}
	}
}