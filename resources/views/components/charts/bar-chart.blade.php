<div>


    <div class="bg-white rounded-2xl shadow-md overflow-hidden p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Feedback Count</h2>
        <div class="relative">
            <canvas id="bar-chart" class="w-full h-64"></canvas>
        </div>
    </div>

    <script type="module">

        const ctx = document.getElementById('bar-chart');
        const labels = @json($chartData->labels);
            const dataset = @json($chartData->dataSets);

        new window.chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: "{{$chartData->labelName}}",
                    data: dataset,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>







</div>


