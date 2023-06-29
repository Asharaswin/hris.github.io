<div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
  <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
    <h6>Employee Status overview</h6>
  </div>
  <div class="flex-auto p-8">
    <canvas id="employee-status-chart" class="chart-canvas" height="100"></canvas>
  </div>
</div>
@php
$labels = $data->pluck('status');
$data = $data->pluck('total');
@endphp
@push('scripts')
<script>
  var ctx = document.getElementById("employee-status-chart").getContext("2d");
  
  new Chart(ctx, {
      type: "pie",
      data: {
          labels: {!! json_encode($labels) !!},
          datasets: [{
              data: {!! json_encode($data) !!},
              backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
              ],
              hoverOffset: 4
          }]
      },
  });
</script>
@endpush
