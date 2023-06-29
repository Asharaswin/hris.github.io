
<div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
    <div class="flex-auto p-4">
      <h6>Age Range overview</h6>
    </div>
    <div class="flex-auto px-8">
      <canvas id="chart-bars" class="chart-canvas" height="100"></canvas>
    </div>
</div>
@php
$labels = $data->pluck('range');
$data = $data->pluck('numberofusers');
@endphp
@push('scripts')
<script>
    var ctx = document.getElementById("chart-bars").getContext("2d");
    
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: [{
                data: {!! json_encode($data) !!},
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: false,
                backgroundColor: "black",
                maxBarThickness: 20
            }]
        },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: false,
          }
        },
        scales: {
          y: {
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            //   color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            }
          },
        },
        }
    });
</script>
@endpush
